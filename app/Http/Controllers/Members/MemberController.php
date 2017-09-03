<?php namespace App\Http\Controllers\Members;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Redirect;
use App\User;
use App\UserProfile;
use App\UsarMember;

class MemberController extends Controller {

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
		$this->middleware('current_user', ['except' => ['index', 'show', 'search', 'membership', 'rankings', 'home', 'matches']]);
	}
		
	/**
	 * Display index of members.
	 *
	 * @return Response
	 */
	public function search(Request $request)
	{
		$members = User::orderBy('last_name')
			->orderBy('first_name')
			;

		foreach ($members as $m) {
			$user = User::find($m->id);
			$m->profile = $user->profile()->first() ;
		}

		$name = $request['name'];
		$city = $request['city'];

		//Filter by Name
		if ( $name != '') {
			$members = $members
						->where('first_name', 'like', "%$name%")
						->orWhere('last_name', 'like', "%$name%")
						->orWhere(\DB::raw('CONCAT(first_name, " ", last_name)'),'like', "%$name%")
					;
			}

		//Filter by city
		if ( $city != '') {
			$members = $members
						->whereHas('profile', function($query) use ($city)
							{
								$query->where('city', 'like', "%$city%");
							}
						)
						;			
			}

		$members = $members->paginate(10);

		return view('members/profiles/index', compact('members', 'name', 'city'));
	}


	/**
	 * Display index of members.
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{
		$members = User::orderBy('last_name')
			->orderBy('first_name')
			;

		foreach ($members as $m) {
			$user = User::find($m->id);
			$m->profile = $user->profile()->first() ;
		}


		$members = $members->paginate(10);

		//Search parameter
		$name = "";
		$city = "";
			
		return view('members/profiles/index', compact('members', 'name', 'city'));
	}


	/**
	 * Display member profile.
	 *
	 * @return Response
	 */
	public function matches(Request $request)
	{

		return view('members/matches');
	}

	/**
	 * After member login, redirect to their profile page
	 *
	 * @return Response
	 */
	public function home(Request $request)
	{


		if(\Auth::check()){

			$id =  \Auth::user()->id ; 
			if (\Auth::user()->last_name == 'Member' ) {
				return view('welcome');
			} else {
				return redirect()->route('members.show', ['id' =>  $id ]);
			}

		}else{			
			return view('auth/login');
		}

	}

	/**
	 * Display member profile.
	 *
	 * @return Response
	 */
	public function show($id)
	{

		$user = User::find($id);
		$profile = $user->profile()->first();

		$usar = [];
		if(isset($user->usar_id)){
			
			$usar = UsarMember::find($user->usar_id);
			
		}

		$active['profile'] = 'active';
		$active['settings'] = '';

		return view('members/profiles/show', compact('user', 'profile', 'usar', 'active'));
	}

	/**
	 * Display member profile create.
	 *
	 * @return Response
	 */
	public function create($id)
	{

		$user = User::find($id);
		$profile = $user->profile()->first();

		$active['profile'] ='';
		$active['settings'] = 'active';

		return view('members/profiles/create', compact('user', 'profile', 'active'));
	}

	/**
	 * Display member profile edit.
	 *
	 * @return Response
	 */
	public function edit($id)
	{

		$user = User::find($id);
		$profile = $user->profile()->first();

		$active['profile'] ='';
		$active['settings'] = 'active';

		return view('members/profiles/edit', compact('user', 'profile', 'active'));
		
	}

	/**
	 * Display member rankings.
	 *
	 * @return Response
	 */
	public function rankings(Request $request)
	{

		return view('members/rankings');
	}


	/**
	 * Display index of memberships.
	 *
	 * @return Response
	 */
	public function membership(Request $request)
	{

		return view('memberships/index');
	}


	/**
	 * Update Personal Info
	 *
	 * @return Response
	 */
	public function update($id)
	{
		// validate
        // read more on validation at http://laravel.com/docs/validation
        // $rules = array(
        //     'name'       => 'required',
        //     'email'      => 'required|email',
        //     'nerd_level' => 'required|numeric'
        // );
        // $validator = Validator::make(Input::all(), $rules);

        // process the login
        // if ($validator->fails()) {
        //     return Redirect::to('nerds/' . $id . '/edit')
        //         ->withErrors($validator)
        //         ->withInput(Input::except('password'));
        // } else {
            // store
            
			$user = User::find($id);
			$profile_id = $user->profile->id;

            $profile = UserProfile::find($profile_id);
            $profile->gender = \Input::get('gender');
            $profile->city = \Input::get('city');
            $profile->skill = \Input::get('skill');
            $profile->racquet = \Input::get('racquet');
            $profile->dominant_hand = \Input::get('hand');
            $profile->bio = \Input::get('bio');
            $profile->save();

            // redirect
            \Session::flash('message', 'Successfully updated Personal Info');

		return  redirect()->back()->with('flash-message','message');  
	}

	/**
	 * Update Avatar
	 *
	 * @return Response
	 */
	public function update_avatar($id)
	{
		$x = $_POST['x'];
		$y = $_POST['y'];
		$w = $_POST['w'];
		$h = $_POST['h'];

		$targ_w = $targ_h = 200;
		$jpeg_quality = 90;
		$name = "profile.png";

        $i = 0;
        foreach ($_FILES["avatar"]["error"] as $key => $error) {
            if ($error == UPLOAD_ERR_OK) {
                $tmp_name = $_FILES["avatar"]["tmp_name"][$key];
                
                if(strpos($tmp_name, '.png') !== false) {
                	$img_r =imagecreatefrompng($tmp_name);
            	}else{
            		$img_r = imagecreatefromjpeg($tmp_name);
            	}

				$dst_r = ImageCreateTrueColor( $targ_w, $targ_h );
				imagecopyresampled($dst_r, $img_r, 0, 0, $x, $y,
		    		$targ_w, $targ_h, $w, $h);

				$output_filename = "images/members/$id/$name";
				
				if (!file_exists("images/members/$id")) {
          			mkdir("images/members/$id", 0777, true);
  		 		}		

				imagejpeg($dst_r, $output_filename, $jpeg_quality);

                $i++;
            }else {
            	dd($error);
            }
        }

        \Session::flash('message', 'Successfully updated avatar');

		return  redirect()->back()->with('flash-message','message'); 
	}

	/**
	 * Delete Avatar
	 *
	 * @return Response
	 */
	public function delete_avatar($id)
	{
		//Overwrite current avatar with default
        //if (file_exists("images/members/$id/profile.png")) {
            copy("images/avatar2.jpg","images/members/$id/profile.png"  );
		//}

        \Session::flash('message', 'Successfully deleted avatar');

		return  redirect()->back()->with('flash-message','message'); 
	}

	/**
	 * Update Password
	 *
	 * @return Response
	 */
	public function update_pwd($id)
	{
		// validate
        // read more on validation at http://laravel.com/docs/validation
        $rules = array(        	
            'current_password' => 'required|confirmed',
            'password' => 'required|min:4|confirmed',
        );

        $input = \Input::all();
        $input['current_password_confirmation'] = \Auth::user()->password;
        $validator = \Validator::make($input, $rules);

        if ($validator->fails()) {
          
        	$message = 'Failed to change password.';
   			return  redirect()->back()
				->with('alert-danger', $message)
				->withErrors($validator)
	            ->withInput(\Input::except('password'));
				;    
        } else {
            //store
            
            $user = User::find($id);
            $user->password = \Input::get('password');
            $user->save();

            \Session::flash('alert-success', 'Successfully updated password');
        }

		return  redirect()->back()->with('flash-message','message');  
	}

	/**
	 * Update Privacy
	 *
	 * @return Response
	 */
	public function update_privacy($id)
	{

	}

	/**
	 * Link USAR Account
	 *
	 * @return Response
	 */
	public function link_usar($id)
	{
		$user = User::find($id);
		$username = \Input::get("username");
		$password = \Input::get("password");
		$user->link_Usar($id, $username, $password);
	
         \Session::flash('alert-success', 'Successfully linked your USAR account');

		return  redirect()->back()->with('flash-message','message');  
	}

}