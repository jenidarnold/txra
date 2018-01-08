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
            ->paginate(1000);


        $directory =  resource_path() . "/views/emails";

        $files = \File::allFiles($directory);

        $pages = [];
        foreach ($files as $file) {

            $filename = realPath($file);
            $filename = str_replace(resource_path() . "/views/", '', $filename);
            $filename = str_replace('.blade.php', '', $filename);
            $filename = str_replace("/", ".", $filename);
            $pages[$filename] = $filename;
        }

       // dd($pages);
       return view('admin.email.index', compact('users', 'pages'));
    }

    /**
     * process the form submission and send the invite by email
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    public function send(Request $request)
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
            'recipients' => 'required',            
        );

        $validator = \Validator::make($input, $rules, array('recipients' => ':input must have valid email addresses.'));

        if ($validator->fails()) {          
            $message = 'Please fill out all required fields';
            return  \Redirect::to(\URL::previous() . "#form")
                ->with('alert-danger', $message)
                ->withErrors($validator)
                ->withInput(\Input::except('password'));
                ;   
        }
             
        // Send to each email address
        $emails = $request->recipients;
        $emails = explode(',', $emails);
        $subject = $request->subject;
        $page = $request->pages;

        $errors = [];
        foreach ($emails as $email) {
            try {
                $this->send_per_user(trim($email), $subject, $page);
            }
           catch (\Exception $e) {
                 $errors[] = $email . ': ' . $e->getMessage();
            }
        }
                
        if (count($errors) > 0) {
        return  \Redirect::to(\URL::previous())
                ->with('alert-danger', "Errors encountered:")
                ->withErrors($errors)
                ->withInput(\Input::except('password'));
        }
        else{
            return  \Redirect::to(\URL::previous())
                ->with('alert-success', "Successfully sent emails")
                ->withErrors($errors)
                ->withInput(\Input::except('password'));
        }

    }

    /**
     * Get user by email then Send email
     * @param  [type] $id      [description]
     * @param  [type] $subject [description]
     * @param  [type] $page    [description]
     * @return [type]          [description]
     */
    public function send_per_user($email, $subject, $page){

        $user = User::where('email','=', $email)
            ->first();

       // send the email
        \Mail::send($page, ['user' => $user], function ($m) use ($user, $subject) {
            $m->from(env('MAIL_FROM_EMAIL'), 'Texas Racquetball Association');
            $m->to($user->email, $user->full_name)->subject($subject);
        });

        return true;
    }

}