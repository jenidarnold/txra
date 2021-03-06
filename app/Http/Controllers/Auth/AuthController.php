<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\UserProfile;
use App\Referral;
use App\Credit;
use App\Promo;
use App\PromoAccept;
use App\Events\AccountWasCreated;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    
    protected $redirectTo = '/members/home';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware($this->guestMiddleware(), ['except' => 'logout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {        
        return Validator::make($data, [
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users', 
            'password' => 'required|min:4|confirmed',
           // 'birthday' => 'required', Rule::in([''])
        ]);
    }

     /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    public function register(Request $request)
    {
       
        $this->register_by_email($request);
        $this->redirectPath = 'members/profile/'.\Auth::user()->id.'/create';
        return redirect($this->redirectPath());

    }

    /**
     * Create a new user instance after a valid registration.
     *
     * user account is email
     * @param  array  $data
     * @return User
     */
    public function register_by_email(Request $request)
    {

        $validator = $this->validator($request->all());

        //Check for spam bots filling this fake field
        if ($request->birthday != ''){
            $this->throwValidationException(
                $request, $validator                
            );
        }

        if ($validator->fails()) {
           $this->throwValidationException(
                $request, $validator                
            );
        }



        $user = $this->create($request->all());

        $promo = Promo::find(1);

        //Add credit to $referr
        //Mark accept
        if($request->refer_token != ''){
            $token = $request->refer_token;

            $refer = Referral::find($token);

            if (isset($refer)){
                $accept = new PromoAccept;

                $accept->promo_id = $refer->promo_id;
                $accept->user_referrer_id = $refer->user_id;
                $accept->user_accept_id = $user->id;
                $accept->accepted_at = date("Y-m-d H:i:s");
                $accept->accept_method_id = 1;
                $accept->save();

                $credit = new Credit;
                $credit->user_id = $refer->user_id;
                $credit->type_id = 2;
                $credit->amount = $promo->credit;
                $credit->description ="Refer-a-friend points: ". $user->full_name . " joined.";
                $credit->save();
            }
        }

        //Give New User Credit for signing up
    
        $credit = new Credit;
        $credit->user_id = $user->id;
        $credit->type_id = 1;
        $credit->amount = $promo->credit;
        $credit->description ="New Member points";
        $credit->save();

        \Auth::login($user);
        \Event::fire(new AccountWasCreated($user)); 

    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    public function create(array $data)
    {
        /*\Event::fire(new UserWasRegistered($data)); */
        $user = User::create([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'disabled' => 0
            ]);

        $profile = UserProfile::create([
            'user_id' => $user->id
            ]);

        // send email account created

        \Mail::send('emails.accounts.created', ['user' => $user], function ($m) use ($user) {
            $m->from(env('MAIL_FROM_EMAIL'), 'Texas Racquetball Association');
            $m->to($user->email, $user->full_name)->subject('Welcome! Your online account with TXRA has been created');
        });

        //Create profile folder
        if (!file_exists("images/members/$user->id")) {
            mkdir("images/members/$user->id", 0777, true);
        }
       
        $uid = uniqid();
        $avatar = "profile_$uid.png";
        copy("images/avatar2.jpg","images/members/$user->id/$avatar"); 

        $profile->avatar = $avatar;
        $profile->save();

        return $user;
    }


//     /**
//      * Overrides method in class 'AuthenticatesUsers'
//      *
//      * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\Viewhttps://github.com/peraleks/Laravel-redirect-back-to-original-destination-after-login/blob/master/README.md
//      *
//      * https://github.com/peraleks/Laravel-redirect-back-to-original-destination-after-login/blob/master/README.md
//      */
//     public function showLoginForm()
//     {
//         $view = property_exists($this, 'loginView')
//             ? $this->loginView : 'auth.authenticate';
//         if (view()->exists($view)) {
//             return view($view);
//         }
//         /**
//          * seve the previous page in the session
//          */
//         $previous_url = Session::get('_previous.url');
//         $ref = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '';
//         $ref = rtrim($ref, '/');
//         if ($previous_url != url('login')) {
//             Session::put('referrer', $ref);
//             if ($previous_url == $ref) {
//                 Session::put('url.intended', $ref);
//             }
//         }
//         /**
//          * seve the previous page in the session
//          * end
//          */
//         return view('auth.login');
//     }
//     /**
//      * Overrides method in class 'AuthenticatesUsers'
//      *
//      * @param Request $request
//      * @param $throttles
//      *
//      * @return \Illuminate\Http\RedirectResponse
//      */
//     protected function handleUserWasAuthenticated(Request $request, $throttles)
//     {
//         if ($throttles) {
//             $this->clearLoginAttempts($request);
//         }
//         if (method_exists($this, 'authenticated')) {
//             return $this->authenticated($request, Auth::guard($this->getGuard())->user());
//         }
//         /*return to the previous page*/
//         return redirect()->intended(Session::pull('referrer'));
// //        return redirect()->intended($this->redirectPath()); /*Larevel default*/
//     }

}
