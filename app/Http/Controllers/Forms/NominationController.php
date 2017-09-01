<?php namespace App\Http\Controllers\Forms;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Redirect;
use Illuminate\Support\Facades\URL;

class NominationController extends Controller {

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
        	'from_name' => 'required',
        	'comments' => 'required',
        	'nominee' => 'required',
        	'award' => 'required'
        );

        $input = \Input::all();
        $validator = \Validator::make($input, $rules);

        if ($validator->fails()) {          
        	$message = 'Failed to send. Please fill out all required fields';
   	/*		return  redirect()->back()
				->with('alert-danger', $message)
				->withErrors($validator)
	            ->withInput(\Input::except('password'));
				; */  
			return  Redirect::to(URL::previous() . "#nominate")
				->with('alert-danger', $message)
				->withErrors($validator)
	            ->withInput(\Input::except('password'));
				;   

		}


		$subscriber = new User;
		$subscriber->full_name = $subscriber->full_name;
		$subscriber->email = $request->from_email;

		$txra = new User;
		$txra->email = env('MAIL_TO_EMAIL'); 
		$txra->full_name = env('MAIL_TO_NAME');

        $subject = "TXRA: Annual Awards Nomination Form";

        $subscriber->is_member = $request->is_member;
        $nominee->full_name = $request->nominee;
        $nominee->award = $request->award;
        $comments = $request->comments;

        // Send to TXRA
        Mail::send('emails.awards.sendnomination', ['subject' => $subject, 'comments' => $comments, 'subscriber' => $subscriber, 'nominee' => $nominee], function ($m) use ($subscriber, $txra, $subject)
        {

            $m->from($subscriber->email, $subscriber->full_name );
            $m->to($txra->email, $txra->full_name)->subject($subject);

        });

        //Send confirmation and thank you for signing up
        
    	//\Session::flash('message', 'Successfully subscribed to newsletter');
        Mail::send('emails.awards.replynomination', ['subscriber' => $subscriber], function($m) use ($subscriber, $txra) {
            $subject = 'Thank you for your Award Nomination!';
            $m->from( $txra->email, $txra->full_name);
            $m->to($subscriber->email, $subscriber->full_name)->subject($subject);
        });

        $message = 'Successfully sent. Thank you!';
    	
		return  Redirect::to(URL::previous() . "#join")
			->with('alert-success', $message);
	}
}
