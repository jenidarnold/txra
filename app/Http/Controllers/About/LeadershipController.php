<?php namespace App\Http\Controllers\About;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Redirect;
use App\User;
use Mail;
//use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;

class LeadershipController extends Controller {

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
	 * Display index of board members.
	 *
	 * @return Response
	 */
	public function board(Request $request)
	{

		return view('about/board');
	}

		
	/**
	 * Display index of members.
	 *
	 * @return Response
	 */
	public function bylaws(Request $request)
	{

		return view('about/bylaws');
	}
	/**
	 * Display member profile.
	 *
	 * @return Response
	 */
	public function committees(Request $request)
	{

		return view('about/committees');
	}

	/**
	 * Display member profile.
	 *
	 * @return Response
	 */
	public function election(Request $request)
	{

		return view('about/election');
	}

	/**
	 * Display member profile.
	 *
	 * @return Response
	 */
	public function mission(Request $request)
	{

		return view('about/mission');
	}

	/**
	 * Display member profile.
	 *
	 * @return Response
	 */
	public function ethics(Request $request)
	{

		return view('about/ethics');
	}

	/*
	 *  Email Committee Form
	 */
	public function joinCommittees(Request $request)
	{
		//validation
		$rules = array(
        	'email' => 'required|email',
        	'first_name' => 'required',
        	'last_name' => 'required',
        	'committees' => 'required'
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
			return  Redirect::to(URL::previous() . "#join")
				->with('alert-danger', $message)
				->withErrors($validator)
	            ->withInput(\Input::except('password'));
				;   

		}


		$subscriber = new User;
		$subscriber->first_name = $request->first_name;
		$subscriber->last_name = $request->last_name;
		$subscriber->full_name = $subscriber->first_name . ' ' . $subscriber->last_name;
		$subscriber->email = $request->email;

		$txra = new User;
		$txra->email = env('MAIL_TO_EMAIL'); 
		$txra->full_name = env('MAIL_TO_NAME');

        $subject = "TXRA, I want to volunteer to work on a committee!";

        $subscriber->is_member = $request->is_member;
        $committees =  $request->committees;
        $comments = $request->comments;

        // Send to TXRA
        Mail::send('emails.committees.sendvolunteer', ['subject' => $subject, 'comments' => $comments, 'subscriber' => $subscriber, 'committees' => $committees], function ($m) use ($subscriber, $txra, $subject)
        {

            $m->from($subscriber->email, $subscriber->full_name );
            $m->to($txra->email, $txra->full_name)->subject($subject);

        });

        //Send confirmation and thank you for signing up
        
    	//\Session::flash('message', 'Successfully subscribed to newsletter');
        Mail::send('emails.committees.replyvolunteer', ['subscriber' => $subscriber], function($m) use ($subscriber, $txra) {
            $subject = 'Thank you for volunteering!';
            $m->from( $txra->email, $txra->full_name);
            $m->to($subscriber->email, $subscriber->full_name)->subject($subject);
        });

        $message = 'Successfully sent. Thank you!';
    	
		return  Redirect::to(URL::previous() . "#join")
			->with('alert-success', $message);
	}
}