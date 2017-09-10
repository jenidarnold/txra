<?php namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Invite;
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
	   $this->middleware('auth');
       $this->middleware('admin_user');
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

        // send the email
        \Mail::send('emails.invites.send', ['invite' => $invite], function ($m) use ($invite) {
            $m->from('noreply@txra.com', 'Texas Racquetball Association');
            $m->to($invite->email, $invite->full_name)->subject('Your New TXRA Account is Ready!');
            $m->bcc('julie.enid@gmail.com', 'TXRA Communications Committee');
        });

        
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

        $user = $user->create_profile($profile);

        // delete the invite so it can't be used again
        $invite->accepted = 1;
        $invite->accepted_at = Carbon::now();
        $invite->save();


        // here you would probably log the user in and show them the dashboard, but we'll just prove it worked
        // User must change password
       \Auth::login($user);

       //return redirect()->route('members.create', ['id' => \Auth::user()->id]);
       return redirect()->route('members.create_pwd', ['id' => \Auth::user()->id]);
       
       
       
    }
}