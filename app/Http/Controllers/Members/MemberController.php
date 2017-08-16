<?php namespace App\Http\Controllers\Members;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Redirect;
use App\User;
use App\UserProfile;

class MemberController extends Controller {

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
		$this->middleware('current_user', ['except' => ['index', 'show', 'membership', 'rankings', 'home', 'matches']]);
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
			->get()
			;

			foreach ($members as $m) {
				$user = User::find($m->id);
				$m->profile = $user->profile()->first() ;
			}

		return view('members/profiles/index', compact('members'));
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

		$active['profile'] = 'active';
		$active['settings'] = '';

		return view('members/profiles/show', compact('user', 'profile', 'active'));
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
            
            $profile = UserProfile::find($id);
            $profile->gender = \Input::get('gender');
            $profile->city = \Input::get('city');
            $profile->skill = \Input::get('skill');
            $profile->racquet = \Input::get('racquet');
            $profile->dominant_hand = \Input::get('hand');
            $profile->bio = \Input::get('bio');
            $profile->save();

			$user = User::find($id);
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

        // http://php.net/manual/en/features.file-upload.post-method.php
        $i = 0;
        foreach ($_FILES["avatar"]["error"] as $key => $error) {
            if ($error == UPLOAD_ERR_OK) {
                $tmp_name = $_FILES["avatar"]["tmp_name"][$key];
                // basename() may prevent filesystem traversal attacks;
                // further validation/sanitation of the filename may be appropriate
                
                //append display order numner
                $order = $i.'_';
                $name = "profile.png";

                if (!file_exists("images/members/$id")) {
                    mkdir("images/members/$id", 0777, true);
                }
                move_uploaded_file($tmp_name, "images/members/$id/$name");
                $i++;
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