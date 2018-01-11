<?php namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Invite;
use App\Events\AccountWasCreated;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class InviteController extends Controller {

	/**
	 * Create a new screen scrape controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
	   $this->middleware('auth', ['except' => ['accept']]);
       $this->middleware('admin_user', ['except' => ['accept']]);
	}

    // show the user a form with an email field to invite a new user
    public function invite()
    {
       return view('forms.invite.create');
    }

    // process the form submission and send the invite by email
    public function process(Request $request)
    {
        
        $data = [];
        $data['first_name'] =  $request->get('first_name');
        $data['last_name'] =  $request->get('last_name');
        $data['email'] =  $request->get('email');

        $invite = new Invite;
        $invite = $invite->create_with_token($data);

        $this->send($invite->id);
        
        // redirect back where we came from
        return redirect()
            ->back();
    }


    public function send($id){

        $invite = Invite::find($id);

       // send the email
        //\Mail::send('emails.invites.send', ['invite' => $invite], function ($m) use ($invite) {
        \Mail::send('emails.promo.invite', ['invite' => $invite], function ($m) use ($invite) {
            $m->from(env('MAIL_FROM_EMAIL'), 'Texas Racquetball Association');
            //$m->to($invite->email, $invite->full_name)->subject('Your New TXRA Account is Ready!');
            $m->to($invite->email, $invite->full_name)->subject('Racquetball Sweepstakes! A chance to win a FREE ENTRY into your next tournament!');
        });

        $invite->sent=1;
        $invite->sent_at = Carbon::now();
        $invite->save();

        // redirect back where we came from
        return redirect()
            ->back();

    }

    // here we'll look up the user by the token sent provided in the URL
    public function accept($token)
    { // Look up the invite
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