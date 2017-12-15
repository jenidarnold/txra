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
use App\PromoAccept;
use App\Credit;


class ReferralController extends Controller {

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth', ['except' => ['accept', 'register', 'index']]);
		$this->middleware('current_user', ['except' => ['accept', 'register', 'index']]);
	}
		
	/**
	 * Display index of referall prorgam.
	 *
	 * @return Response
	 */
	public function index()
	{

        $promo = Promo::find(1);
        $refer = new Referral;

        $refer->token ='Your-Unique-Refer-Code';

    	return view('members/referral/index', compact('promo', 'refer'));
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
        $active['rewards'] = '';

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
        
        $promo = Promo::find(1);

        //Get just the Promo 1 for now    
        $refer = Referral::where('user_id', '=', $id)
            ->where('promo_id', '=', 1)
            ->first();

        $referrals = PromoAccept::where('user_referrer_id', '=', $user->id)
            ->where('promo_id', '=', 1)
            ->orderBy('created_at', 'desc')
            ->get()
            ;        

    	return view('members/profiles/refer', compact('user', 'usar', 'promo', 'refer', 'referrals', 'profile', 'active'));
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
            //'title' => "Earn credit towards REWARDS when you join TXRA.org",
            'title' => "Sign up to Win! Enter TXRA's PICK-A-FREE-TOURNEY Sweepstakes when you join TXRA.org",
            'description' => "Your friend, " . $user->full_name. ', wants you to join the Texas Racquetball Association. It is FREE to join! Use this link to register.',
            'image' => '/images/members/'.$user->id.'/'.$profile->avatar,
            'image_width' => '400',
            'image_height' => '200',
            'image_type'    => 'image/'. explode('.',$profile->avatar,2)[1],
            'url'   => \Config::get('app.url') .'/register/'.  $token
        ];

    	return view('members/referral/register', compact('promo', 'refer', 'user', 'profile', 'meta'));
	}

    /*
     *  Email Referral
     */
    public function send_email(Request $request)
    {


        $input = \Input::all();
        //Custom validator in laravel to validate comma separated emails.
        //https://gist.github.com/technoknol/d52eb295608d18b86e25663107663204
        \Validator::extend("emails", function($attribute, $values, $parameters) {
            $value = explode(',', $values);
            $rules = [
                'email' => 'required|email',
            ];
            if ($value) {
                foreach ($value as $email) {
                    $data = [
                        'email' => $email
                    ];
                    $validator = \Validator::make($data, $rules);
                    if ($validator->fails()) {
                        return false;
                    }
                }
                return true;
            }
        });
        
        //validation of new custom ule
        $rules = array(
            'emails' => 'required',            
        );

        $validator = \Validator::make($input, $rules, array('emails' => ':input must have valid email addresses.'));

        if ($validator->fails()) {          
            $message = 'Please fill out all required fields';
            return  Redirect::to(\URL::previous() . "#form")
                ->with('alert-danger', $message)
                ->withErrors($validator)
                ->withInput(\Input::except('password'));
                ;   
        }
     
        $id = $request->user_id;
        $user = User::find($id);  

        $subject = 'Your friend, ' . $user->full_name. ', wants you to join the Texas Racquetball Association. It is FREE to join!';

        // Send to each friend
        $emails = $request->emails;
        $emails = explode(',', $emails);
        foreach ($emails as $friend_email) {

            \Mail::send(
                'emails.referrals.send', 
                ['subject' => $subject, 'user' => \Auth::user()], 
                function ($m) use ($user, $friend_email, $subject)
                    {
                        $m->from(env('MAIL_FROM_EMAIL'), $user->full_name );
                        $m->to($friend_email, $friend_email)->subject($subject);
                    }
                );
        }

        //Send confirmation

        $message = 'Successfully sent. Thank you!';
        
        return  Redirect::to(\URL::previous() . "#form")
            ->with('alert-success', $message);
    }
}