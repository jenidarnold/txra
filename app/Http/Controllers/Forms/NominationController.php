<?php namespace App\Http\Controllers\Forms;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Redirect;
use Illuminate\Support\Facades\URL;
use App\User;
use Mail;

class NominationController extends Controller {

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
	 * Display basics.
	 *
	 * @return Response
	 */
	public function election(Request $request)
	{
		return view('forms/nominate/election');
	}

	/**
	 * Display basics.
	 *
	 * @return Response
	 */
	public function awards(Request $request)
	{

		return view('forms/nominate/awards');
	}


	/*
	 *  Email Award Form
	 */
	public function sendAward(Request $request)
	{
		//validation
		$rules = array(
        	'from_email' => 'required|email',
        	'from_first_name' => 'required',
        	'from_last_name' => 'required',
        	'comments' => 'required',
        	'nominee_first_name' => 'required',
        	'nominee_last_name' => 'required',
        	'award' => 'required',
        	'is_member' => 'required'
        );

        $input = \Input::all();
        $validator = \Validator::make($input, $rules);

        if ($validator->fails()) {          
        	$message = 'Please fill out all required fields';
   			return  Redirect::to(URL::previous() . "#form")
				->with('alert-danger', $message)
				->withErrors($validator)
	            ->withInput(\Input::except('password'));
				;   
		}

		$captcha = \Input::get('g-recaptcha-response');
		if(!$captcha){
          $message = 'Failed to send. Please check the reCaptacha box.';
   			return   Redirect::to(URL::previous() . "#form")
				->with('alert-danger', $message)
				->withErrors($validator)
	            ->withInput(\Input::except('password'));
        }

        $secret = ENV("RECAPTCHA_SECRET");
        $response=json_decode(file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secret."&response=".$captcha."&remoteip=".$_SERVER['REMOTE_ADDR']), true);
        if($response['success'] == false){
        	$message = 'Failed to send.' + $response;
   			return   Redirect::to(URL::previous() . "#form")
				->with('alert-danger', $message)
				->withErrors($validator)
	            ->withInput(\Input::except('password'));
				;    
		}

		$subscriber = new User;
		$subscriber->first_name = $request->from_first_name;
		$subscriber->last_name = $request->from_last_name;
		$subscriber->email = $request->from_email;
		$subscriber->phone = $request->from_phone;
		$subscriber->is_member = $request->is_member;

        $nominee = new User;
        $nominee->first_name = $request->nominee_first_name;
        $nominee->last_name = $request->nominee_last_name;
        $nominee->award = $request->award;
        $comments = $request->comments;

		$txra = new User;
		$txra->email = env('MAIL_TO_EMAIL'); 
		$txra->full_name = env('MAIL_TO_NAME');

        $subject = "TXRA: Annual Awards Nomination Form";

        // Send to TXRA
        Mail::send('emails.awards.sendnomination', ['subject' => $subject, 'comments' => $comments, 
        	'subscriber' => $subscriber, 'nominee' => $nominee], function ($m) use ($subscriber, $txra, $subject)
        {

            $m->from(env('MAIL_FROM_EMAIL'), $subscriber->full_name );
            $m->to($txra->email, $txra->full_name)->subject($subject);

        });

        //Send confirmation and thank you for signing up
        
    	//\Session::flash('message', 'Successfully subscribed to newsletter');
        Mail::send('emails.awards.replynomination', ['subscriber' => $subscriber, 'nominee' => $nominee], function($m) use ($subscriber, $txra) {
            $subject = 'Thank you for your Award Nomination!';
            $m->from(env('MAIL_FROM_EMAIL'), $txra->full_name);
            $m->to($subscriber->email, $subscriber->full_name)->subject($subject);
        });

        $message = 'Successfully sent. Thank you!';
    	
		return  Redirect::to(URL::previous() . "#form")
			->with('alert-success', $message);
	}
}
