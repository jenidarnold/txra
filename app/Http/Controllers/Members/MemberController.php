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
		//$this->middleware('auth');
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
		$gender = $request['gender'];
		$skill = $request['skill'];

		$active = $this->get_active_filter('all');	

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

		//Filter by gender
		if ( $gender != '') {
			$members = $members
						->whereHas('profile', function($query) use ($gender)
							{
								$query->where('gender', '=', "$gender");
							}
						)
						;	

			$active = $this->get_active_filter($gender);		
		}

		//Filter by skill
		if ( $skill != '') {
			$members = $members
						->whereHas('profile', function($query) use ($skill)
							{
								$query->where('skill', '=', "$skill");
							}
						)
						;			
			$active = $this->get_active_filter($skill);		
		}


		$members = $members->paginate(20);

		return view('members/profiles/index', compact('members', 'name', 'city', 'active'));
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


		$members = $members->paginate(20);

		$active = $this->get_active_filter('all');
		//Search parameter
		$name = "";
		$city = "";
			
		return view('members/profiles/index', compact('members', 'name', 'city', 'active'));
	}

	private function get_active_filter($filter){

		$active['all'] = '';
		$active['female'] = '';
		$active['male'] = '';
		$active['pro'] = '';
		$active['open'] = '';
		$active['elite'] = '';
		$active['a'] = '';
		$active['b'] = '';
		$active['c'] = '';
		$active['d'] = '';
		$active['junior'] = '';
		$active['novice'] = '';

		$active[$filter] = 'active';

		return $active;
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
	public function show($param)
	{
		$error = '';
		if( is_numeric($param)) {		
			$user = User::find($param);
			$error = 'member ID ' . $param;
		}
		else {

			$name = explode("-", $param);
			$error = $name[0]. ' '. $name[1];
			$user = User::where('first_name', '=', $name[0])
				->where('last_name', '=', $name[1])
				->first();
			;
		}

		if (!isset($user)){
			return view('errors/nouser', compact('error'));
		}

		$profile = $user->profile()->first();

		$usar = [];
		if(isset($user->usar_id)){
			
			$usar = UsarMember::find($user->usar_id);			
		}

		$active['profile'] = 'active';
		$active['settings'] = '';
        $active['referrals'] = '';

	  	$meta = $this->get_openpgraph_meta($user, $usar);

		return view('members/profiles/show', compact('user', 'meta', 'profile', 'usar', 'active'))
			->with('about', true);
	}

	private function get_openpgraph_meta($user, $usar)
	{
		$profile = $user->profile()->first();
		$description = '';

		if (isset($usar)) {
			$description = "TX Rankings (S/D/X) " 
			. $usar->state_singles_rank . "/"
			. $usar->state_doubles_rank . "/"
			. $usar->state_mixed_rank . "; "
            . "NL Rankings (S/D/X) " 
			. $usar->national_singles_rank . "/"
			. $usar->national_doubles_rank . "/"
			. $usar->national_mixed_rank . "; "
			;
		}

		if(strlen($profile->bio) > 0) {
			$description = $description . "Who Am I? " . substr(strip_tags($profile->bio), 0, 300);
		}
		

		$meta = [
            'title' => "TXRA Member: " . $user->full_name,
            'description' => $description,
            'image' => '/images/members/'.$user->id.'/'.$profile->avatar,
            'image_width' => '200',
            'image_height' => '200',
            'image_type'    => 'image/'. explode('.',$profile->avatar,2)[1],
            'url'   => $user->getUrl()
        ];

        return $meta;
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
		$action = "CREATE";

		$tab['info'] ='active';
    	$tab['avatar']='';
    	$tab['accounts']='';
    	$tab['password']='';
    	$tab['privacy']='';
    	    	
		return view('members/profiles/edit', compact('user', 'profile', 'active', 'action', 'tab'));
	}


	/**
	 * Display member password create.
	 *
	 * @return Response
	 */
	public function create_pwd($id)
	{

		return view('members/profiles/password');
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
		$action = "EDIT";

		$tab['info'] ='active';
    	$tab['avatar']='';
    	$tab['accounts']='';
    	$tab['password']='';
    	$tab['privacy']='';

		return view('members/profiles/edit', compact('user', 'profile', 'active', 'action', 'tab'));
		
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

		//validate
       //read more on validation at http://laravel.com/docs/validation
        $rules = array(
            'first_name'       => 'required',
            'last_name'       => 'required',
        );
        $validator = \Validator::make(\Input::all(), $rules);

        if ($validator->fails()) {

        	$message = 'Failed to update profile.';
            return redirect()->back()
				->with('alert-danger', $message)
                ->withErrors($validator)
                ->withInput(\Input::except('password'));
        } else {
            // store
            
			$user = User::find($id);

			$user->first_name = \Input::get('first_name');
			$user->last_name = \Input::get('last_name');
			$user->save();

			$profile_id = $user->profile->id;

            $profile = UserProfile::find($profile_id);

            $profile->gender = \Input::get('gender');
            $profile->city = \Input::get('city');
            $profile->skill = \Input::get('skill');
            $profile->racquet = \Input::get('racquet');
            $profile->dominant_hand = \Input::get('hand');
            $profile->bio = \Input::get('bio');
            $profile->save();

			$action = \Input::get('action');
            if($action == 'CREATE') {
            	$tab['info'] ='';
            	$tab['avatar']='active';
            	$tab['accounts']='';
            	$tab['password']='';
            	$tab['privacy']='';

            	return  redirect()->route('members.create', ['id' => $id])
            		->with('tab', $tab) ;
            	//return Redirect::to(URL::previous() . "#avatar");
            }else {
            // redirect
	            \Session::flash('message', 'Successfully updated Personal Info');

				return  redirect()->route('members.show', ['id' =>  $id ])
					->with('flash-message','message');  
			}
		}
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

		$uid = uniqid();
		$name = "profile_$uid.png";



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

				$user = User::find($id);
				$profile_id = $user->profile->id;
           		$profile = UserProfile::find($profile_id);

           		//Old profile 
           		$old_avatar = $profile->avatar;
           		$profile->avatar = $name;
           		$profile->save();

           		//Delete old avatar
           		if (file_exists("images/members/$id/$old_avatar")) {
           			unlink("images/members/$id/$old_avatar");
           		}

                $i++;
            }else {
            	dd($error);
            }
        }

        $action = \Input::get('action');

        //Goto Referal page
        if($action == 'CREATE') {
        	return  redirect()->route('refer.show', ['id' => $id]);
        }else {
        	\Session::flash('message', 'Successfully updated avatar');		
			return  url('/'.$output_filename);
		}
	}

	/**
	 * Delete Avatar
	 *
	 * @return Response
	 */
	public function delete_avatar($id)
	{
	
		$user = User::find($id);
		$profile_id = $user->profile->id;
   		$profile = UserProfile::find($profile_id);

   		//Old profile 
   		$old_avatar = $profile->avatar;
   		$profile->avatar = $name;
   		$profile->save();

   		//Delete old avatar
   		if (file_exists("images/members/$id/$old_avatar")) {
   			unlink("images/members/$id/$old_avatar");
   		}

		//Set Default Dummy profile image
        copy("images/avatar2.jpg","images/members/$id/profile.png"  );

        $uid = uniqid();
        $avatar = "profile_$uid.png";
        copy("images/avatar2.jpg","images/members/$user->id/$avatar"); 

        $profile->avatar = $avatar;
        $profile->save();
	

        \Session::flash('message', 'Successfully deleted avatar');

		return  redirect()->back()->with('flash-message','message'); 
	}

	/**
	 * Store New Password (used by those completing invitation)
	 *
	 * @return Response
	 */
	public function store_pwd($id)
	{

		// validate
        // read more on validation at http://laravel.com/docs/validation
        $rules = array(        	
            'password' => 'required|min:6|confirmed',
        );

        $input = \Input::all();
        $validator = \Validator::make($input, $rules);

        if ($validator->fails()) {
          
        	$message = 'Failed to create password.';
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

            \Session::flash('alert-success', 'Successfully created password');
        }

        return redirect()->route('members.show', ['id' => $id])
        		->with('flash-message','message');  
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
            'password' => 'required|min:6|confirmed',
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