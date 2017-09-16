<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\UserProfile;
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
        
        // if ($request->method == 'email'){
        //     $this->register_by_email($request);
        // }elseif {
        // }elseif {
        // }else{
        // }

        $this->register_by_email($request);
        $this->redirectPath = 'members/profile/'.\Auth::user()->id.'/create';
        return redirect($this->redirectPath());

    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    public function register_by_email(Request $request)
    {
        $validator = $this->validator($request->all());

        if ($validator->fails()) {
           $this->throwValidationException(
                $request, $validator                
            );
        }

        \Auth::login($this->create($request->all()));
        /*\Event::fire(new UserWasRegistered($data)); */


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
        copy("images/avatar2.jpg","images/members/$user->id/profile.png"  );

        return $user;
    }
}
