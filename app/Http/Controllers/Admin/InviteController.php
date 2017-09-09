<?php namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Hash;

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
        // validate the incoming request data

        do {
            //generate a random string using Laravel's str_random helper
            $token = str_random();
        } //check if the token already exists and if it does, try again
        while (Invite::where('token', $token)->first());

        //create a new invite record
        $invite = Invite::create([
            'first_name' => $request->get('first_name'),
            'last_name' => $request->get('last_name'),
            'email' => $request->get('email'),
            'token' => $token
        ]);

        // send the email
        //Mail::to($request->get('email'))->send(new InviteCreated($invite));

        Mail::send('emails.invites.send', ['invite' => $invite], function ($m) use ($user) {
            $m->from('noreply@txra.com', 'Texas Racquetball Association');
            $m->to($invite->email, $invite->full_name)->subject('Your New TXRA Account is Ready!');
        });

        
        // redirect back where we came from
        return redirect()
            ->back();
    }

    // here we'll look up the user by the token sent provided in the URL
    public function accept($token)
    { // Look up the invite
        if (!$invite = Invite::where('token', $token)->first()) {
            //if the invite doesn't exist do something more graceful than this
            abort(404);
        }

        // create the user with the details from the invite
        User::create(['email' => $invite->email]);
        $user = new User;

        $invite->password = Hash::make(str_random(8));
        $invite = $invite->toArray();
        $user->create_profile($invite);

        // delete the invite so it can't be used again
        $invite->delete();

        // here you would probably log the user in and show them the dashboard, but we'll just prove it worked
        // User must change password

        return 'Good job! Invite accepted!';
    }
}