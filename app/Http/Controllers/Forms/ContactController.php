<?php namespace App\Http\Controllers\Forms;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Redirect;
use Mail;
use App\User;
use Illuminate\Support\Facades\URL;

class ContactController extends Controller {

	/** https://app.mailgun.com/app/domains/mg.texasracquetball.org/verify */

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		//$this->middleware('auth');
	}
		
	/**
	 * Display index of members.
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{
		$to = new User;
		$to->full_name = "";

		if( trim($request->to)  != ''){
			$to->full_name = trim($request->to);
		}

		if(\Auth::check()){
			$from = \Auth::user();
		}else {
			$from = new User;
		}

		return view('forms/contact', compact('to', 'from'));
		
	}

	/*
	 *  Email Contact Form
	 */
	public function send(Request $request)
	{
		
		// validate
        // read more on validation at http://laravel.com/docs/validation
       //validation
		$rules = array(
        	'from_email' => 'required|email',
        	'from_first_name' => 'required',
        	'from_last_name' => 'required',
        	'subject' => 'required',
        	'message' => 'required',
        	'g-recaptcha-response' => 'required'
        );

        $input = \Input::all();
        $validator = \Validator::make($input, $rules);

        if ($validator->fails()) {
          
        	$message = 'Failed to send.';
   			return  redirect()->back()
				->with('alert-danger', $message)
				->withErrors($validator)
	            ->withInput(\Input::except('password'));
				;    
		}

		$captcha = \Input::get('g-recaptcha-response');
		if(!$captcha){
          $message = 'Failed to send. Please check the captacha.';
   			return  redirect()->back()
				->with('alert-danger', $message)
				->withErrors($validator)
	            ->withInput(\Input::except('password'));
        }

        $response=json_decode(file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6LfB4DAUAAAAAHwA_AmMxO4cdcVaJ9totprbuesE&response=".$captcha."&remoteip=".$_SERVER['REMOTE_ADDR']), true);
        if($response['success'] == false){
        	$message = 'Failed to send.';
   			return  redirect()->back()
				->with('alert-danger', $message)
				->withErrors($validator)
	            ->withInput(\Input::except('password'));
				;    
		}

		//Compose message
		$from = new User;
		$from->first_name = $request->from_first_name;
		$from->last_name = $request->from_last_name;
		$from->full_name = $from->first_name . ' ' . $from->last_name;
		$from->email = $request->from_email;
		$from->phone = $request->from_phone;


		$to = new User;
		$to->email = env('MAIL_TO_EMAIL'); 
   		if( trim($request->to_full_name)  != ''){
			$to->full_name = trim($request->to_full_name);
		}
		else{
			$to->full_name =  env('MAIL_TO_NAME');
		}

        $subject = $request->subject;
        $body = $request->message;
        $department = $request->department;

        if( trim($request->department)  != ''){
			$department = trim($request->department);
			$subject = "ATTEN " & $department & ": " & $subject;
		}
		else{
			$department =  "General";
		}    

        Mail::send('emails.contact.send', 
        	['from' => $from, 'to' => $to, 'subject' => $subject, 'department' => $department, 'body' => $body], 
        	function ($m) use ($from, $to, $subject, $department, $body)
        {

            $m->from($from->email, $from->full_name );
            $m->to($to->email, $to->full_name)->subject($subject);
            $m->bcc($to->email, env('MAIL_TO_NAME') );

        });

        $message = 'Successfully sent. Thank you!';
    	
		return  Redirect::to(URL::previous())
			->with('alert-success', $message); 
	}
}