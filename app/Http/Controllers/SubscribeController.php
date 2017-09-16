<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Subscriber;
use Mail;

class SubscribeController extends Controller
{
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
     * Display a list of subscribers 
     */
    public function index(){

    }

    /**
     * Store (sign up) as new subscription
     *
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $rules = array(
        	'email' => 'required|email',
        	'subscription_id' => 'required'
        );

        $validator = \Validator::make(\Input::all(), $rules);

        if ($validator->fails()) {
        	Session::flash('message', 'Failed to subscribe to newsletter');
        } else  {
        	// store
        	$subscriber = new Subscriber;
        	$subscriber->email = \Input::get('email');
        	$subscriber->subscription_id = \Input::get('subscription_id');
        	$subscriber->enabled = true;
        	$subscriber->save();

            $subscriber->name ="New Subscriber";

            //TODO: create subscription email 
        	// \Session::flash('message', 'Successfully subscribed to newsletter');
         //    Mail::send('emails.contact.subscription', ['subscriber' => $subscriber], function($m) use ($subscriber) {
         //        $subject = 'You are now enrolled to receive TXRA updates and  newsletters';
         //        $m->from(env('MAIL_FROM_EMAIL'), 'TXRA');
         //        $m->to($subscriber->email, $subscriber->name)->subject($subject);
         //        $m->bcc('julie.enid@gmail.com', 'TXRA Communications Committee');

         //    });
        }

    }


    /**
     * Update a a subscription
     * @param  int $[name] [<description>]
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        
    }
}
