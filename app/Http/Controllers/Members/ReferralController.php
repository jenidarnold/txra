<?php namespace App\Http\Controllers\Members;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Redirect;
use App\User;
use App\UserProfile;
use App\UsarMember;
use App\Referral;
use App\Promo;


class ReferralController extends Controller {

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
		$this->middleware('current_user', ['except' => ['accept', 'register']]);
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
        $user = User::find($id);		
        $profile_id = $user->profile->id;
        $profile = UserProfile::find($profile_id);
        
        $usar = [];
        if(isset($user->usar_id)){            
            $usar = UsarMember::find($user->usar_id);           
        }

        //Set Active NAV Link
        $active['profile'] = '';
        $active['settings'] = '';
        $active['referrals'] = 'active';

        //Set All Promos Referrals by user id     
        $promos = Promo::all();
        foreach($promos as $promo) {
            $refer = Referral::where('user_id', '=', $id)
                ->where('promo_id', '=', $promo->id);

            // Create refer and token
            if($refer->count() == 0){
                $refer = new Referral;
                $refer->create_with_token($promo->id, $id);            
            }
        }
        
        //Get just the Promo 1 for now    
        $promo = Promo::find(1)->first(); 
        $refer = Referral::where('user_id', '=', $id)
                ->where('promo_id', '=', 1)
                ->first();
                
        //dd( $refer->referrals($promo->id));
    	return view('members/profiles/refer', compact('user', 'usar', 'promo', 'refer', 'profile', 'active'));
	}

    //
	public function register($token) {

        $refer = Referral::find($token);

        if(!isset($refer)){
            $refer = Referral::where('promo_id', '=', 1)
                ->where('user_id', '=', 1)
                ->first();
        }

        $promo = Promo::find($refer->promo_id)->first();


		//get refer user by token		
		$user = User::find($refer->user_id);
		$profile = $user->profile()->first();

		$meta = [
            'title' => "Earn credit towards REWARDS when you join TXRA.org",
            'description' => "Your friend, " . $user->full_name. ', wants you to join the Texas Racquetball Association. It is FREE to join! Use this link to register.',
            'image' => '/images/members/'.$user->id.'/'.$profile->avatar,
            'image_width' => '400',
            'image_height' => '200',
            'image_type'    => 'image/'. explode('.',$profile->avatar,2)[1],
            'url'   => \Config::get('app.url') .'/register/'.  $token
        ];

    	return view('members/referral/register', compact('promo', 'user', 'profile', 'meta'));
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