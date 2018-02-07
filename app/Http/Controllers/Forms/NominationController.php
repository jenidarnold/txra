<?php namespace App\Http\Controllers\Forms;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Redirect;
use Illuminate\Support\Facades\URL;
use App\User;
use Mail;
use App\Nomination;
use App\AwardType;

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
	 *  Email Elections Form
	 */
	public function sendElection(Request $request)
	{
		//validation
		$rules = array(
        	'from_email' => 'required|email',
        	'from_first_name' => 'required',
        	'from_last_name' => 'required',
        	'comments' => 'required',
        	'nominee_first_name' => 'required',
        	'nominee_last_name' => 'required',
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

        $nomination = new Nomination;
        $nomination->type_id = 2; //2018 Election Nomination
		$nomination->proposer_first_name = $request->from_first_name;
		$nomination->proposer_last_name = $request->from_last_name;
		$nomination->proposer_email = $request->from_email;
		$nomination->proposer_phone = $request->from_phone;
		$nomination->proposer_is_member = $request->is_member;
		$nomination->nominee_first_name = $request->nominee_first_name;
        $nomination->nominee_last_name = $request->nominee_last_name;
        $nomination->comments = $request->comments;
        $nomination->save();

        //Extra info not saved in DB
        $nomination->position = "Board of Director";

		$txra = new User;
		$txra->email = 'elections@mg.texasracquetball.org'; //env('MAIL_TO_EMAIL'); 
		$txra->full_name = 'TXRA Elections Committee Director' //env('MAIL_TO_NAME');

        $subject = "TXRA: Board of Directors Nomination Form";

        // Send to TXRA
        Mail::send(
		        	'emails.election.sendnomination', 
		        	['subject' => $subject, 'nomination' => $nomination ], 
		        	function ($m) use ($nomination, $txra, $subject)
				    	{
				            $m->from(env('MAIL_FROM_EMAIL'), $nomination->proposer_full_name );
				            $m->to($txra->email, $txra->full_name)->subject($subject);
				        }
		        	);

        //Send confirmation and thank you for submitting        
        Mail::send(
        			'emails.election.replynomination', 
        			['nomination' => $nomination], 
        			function($m) use ($nomination, $txra) 
        				{
				            $subject = 'Thank you for your Elections Nomination!';
				            $m->from(env('MAIL_FROM_EMAIL'), $txra->full_name);
				            $m->to($nomination->proposer_email, $nomination->proposer_full_name)->subject($subject);
			        	}
			        );

        $message = 'Successfully sent. Thank you!';
    	
		return  Redirect::to(URL::previous() . "#form")
			->with('alert-success', $message);
	}


	/*
	 *  Email Awards Form
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
        	'award_id' => 'required',
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

		$award = AwardType::find($request->award_id);
		if(!$award){
        	$message = 'Failed to send. Please check award selection';
   			return   Redirect::to(URL::previous() . "#form")
				->with('alert-danger', $message)
				->withErrors($validator)
	            ->withInput(\Input::except('password'));
				;    
		}

        $nomination = new Nomination;
        $nomination->type_id = 1; //2017 Annual Awards
		$nomination->proposer_first_name = $request->from_first_name;
		$nomination->proposer_last_name = $request->from_last_name;
		$nomination->proposer_email = $request->from_email;
		$nomination->proposer_phone = $request->from_phone;
		$nomination->proposer_is_member = $request->is_member;
		$nomination->nominee_first_name = $request->nominee_first_name;
        $nomination->nominee_last_name = $request->nominee_last_name;
        $nomination->category_id = $request->award_id;                
        $nomination->comments = $request->comments;
        $nomination->save();

        //Extra info not saved in DB
        $nomination->award = $award->title;

		$txra = new User;
		$txra->email = env('MAIL_TO_EMAIL'); 
		$txra->full_name = env('MAIL_TO_NAME');

        $subject = "TXRA: Annual Awards Nomination Form";

        // Send to TXRA
        Mail::send(
		        	'emails.awards.sendnomination', 
		        	['subject' => $subject, 'nomination' => $nomination ], 
		        	function ($m) use ($nomination, $txra, $subject)
				    	{
				            $m->from(env('MAIL_FROM_EMAIL'), $nomination->proposer_full_name );
				            $m->to($txra->email, $txra->full_name)->subject($subject);
				        }
		        	);

        //Send confirmation and thank you for signing up
        Mail::send(
        			'emails.awards.replynomination', 
        			['nomination' => $nomination], 
        			function($m) use ($nomination, $txra) 
        				{
				            $subject = 'Thank you for your Award Nomination!';
				            $m->from(env('MAIL_FROM_EMAIL'), $txra->full_name);
				            $m->to($nomination->proposer_email, $nomination->proposer_full_name)->subject($subject);
			        	}
			        );

        $message = 'Successfully sent. Thank you!';
    	
		return  Redirect::to(URL::previous() . "#form")
			->with('alert-success', $message);
	}
}
