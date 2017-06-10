<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Subscriber;

class SubscribeController extends Controller
{
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

        	\Session::flash('message', 'Successfully scribed to newsletter');

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
