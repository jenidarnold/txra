<?php namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Invite;
use App\Events\AccountWasCreated;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class EmailController extends Controller {

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

        $users = User::orderBy('last_name')
            ->orderBy('first_name')
            ->paginate(100);



       return view('admin.email.index', compact('users'));
    }

    // process the form submission and send the invite by email
    public function send(Request $request)
    {
              
        //TODO get all users from array of checked box
        
        $subject = $request->subject;
        $view = $request->view;

        //validate
       //read more on validation at http://laravel.com/docs/validation
        $rules = array(
            'first_name'       => 'required',
            'last_name'       => 'required',
            'email' => 'required|email',
        );
        $validator = \Validator::make(\Input::all(), $rules);

        if ($validator->fails()) {

            $message = 'Failed to update user.';
            return redirect()->back()
                ->with('alert-danger', $message)
                ->withErrors($validator)
                ->withInput(\Input::except('password'));
        } else {

            foreach ($users as $user) {
                   $this->send_per_user($user->id, $subject);
            }
            
        }

        // redirect back where we came from
        return redirect()
            ->back();
    }


    public function send_per_user($id, $view,  $subject){

        $user = User::find($id);

       // send the email
        \Mail::send($email_view, ['user' => $user], function ($m) use ($user) {
            $m->from(env('MAIL_FROM_EMAIL'), 'Texas Racquetball Association');
            $m->to($user->email, $user->full_name)->subject($subject);
        });

        return true;
    }

}