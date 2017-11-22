<?php namespace App\Http\Controllers\Members;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Redirect;
use App\User;
use App\UserProfile;

class ReferralController extends Controller {

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		//$this->middleware('auth');
		//$this->middleware('current_user');
	}
		
	/**
	 * Display index of referall prorgam.
	 *
	 * @return Response
	 */
	public function index()
	{

    	return view('members/referral/index');
	}

	/**
	 * Display Referral Info of user.
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$refer = new UserProfile;
		$refer->user_id = $id;
		$refer->credit = 200;
		$refer->referrals = 10;
		$refer->token = "AXXCBHEQ";

    	return view('members/referral/invite', compact('refer'));
	}

	 // here we'll look up the user by the token sent provided in the URL
    public function accept($token)
    { // Look up the invite

    	exit;
    	
        if (!$invite = Invite::where('token', $token)
            ->where('accepted', '<>', '1')
            ->first()) 
        {
            //if the invite doesn't exist do something more graceful than this
            return view('auth/register');
        }

        // create the user with the details from the invite
        $user = new User;

        $profile = $invite->toArray();

        $profile['password'] = \Hash::make(str_random(8));
        $profile['disabled'] = 0;
        $profile['usar_id'] = 0;

        $user = $user->create_profile($profile);

        // delete the invite so it can't be used again
        $invite->accepted = 1;
        $invite->accepted_at = Carbon::now();
        $invite->save();


        // login the user 
        \Auth::login($user);       
        \Event::fire(new AccountWasCreated($user)); 

       //if (Auth::check()) {
            return redirect()->route('members.create_pwd', ['id' => \Auth::user()->id]);
        //}else {
        //    return redirect()->route('login');
        //}       
       
    }
}