<?php namespace App\Http\Controllers\Forms;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Redirect;
use Mail;
use App\User;


class ContactController extends Controller {

	/** https://app.mailgun.com/app/domains/mg.texasracquetball.org/verify */

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}
		
	/**
	 * Display index of members.
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{
		$to = new User;
		$to->full_name = $request->to;

		if(\Auth::check()){
			$from = \Auth::user();
		}else {

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
        	'message' => 'required'
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

		//Compose message
		$from = new User;
		$from->first_name = $request->from_first_name;
		$from->last_name = $request->from_last_name;
		$from->full_name = $from->first_name . ' ' . $from->last_name;
		$from->email = $request->from_email;

		$to = new User;
		$to->email ='julie.enid@gmail.com'; /* replace with ENV VAR or look up email by Name or BoardID  */
		$to->full_name = $request->to_full_name;

        $subject = $request->subject;
        $content = $request->message;


        Mail::send('emails.send', ['subject' => $subject, 'content' => $content], function ($m) use ($from, $to, $subject)
        {

            $m->from($from->email, $from->full_name );
            $m->to($to->email, $to->name)->subject($subject);

        });

    	\Session::flash('message', 'Successfully emailed message');
    	
		return  redirect()->back()->with('flash-message','message');  
	}
}