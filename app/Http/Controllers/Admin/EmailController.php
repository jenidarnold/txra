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
    public function index()
    {
       return view('forms.email.create');
    }

    // process the form submission and send the invite by email
    public function blast(Request $request)
    {
              
        $users = User::all();

        $subject = $request->subject;
        $view = $request->view;

        foreach ($users as $user) {
               $this->send($user->id, $subject);
        }
        
        // redirect back where we came from
        return redirect()
            ->back();
    }


    public function send($id, $view,  $subject){

        $user = User::find($id);

       // send the email
        \Mail::send($email_view, ['user' => $user], function ($m) use ($user) {
            $m->from(env('MAIL_FROM_EMAIL'), 'Texas Racquetball Association');
            $m->to($user->email, $user->full_name)->subject($subject);
        });

        return true;
    }

}