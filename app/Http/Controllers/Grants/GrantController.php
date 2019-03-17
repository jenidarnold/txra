<?php namespace App\Http\Controllers\Grants;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Redirect;
use Mail;
use App\User;
use App\Grant;
use Illuminate\Support\Facades\URL;

class GrantController extends Controller {

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
		
        $grants = Grant::orderBy('last_name')
        	//->orderBy('first_name')
        	->paginate(20);



		return view('grants.index', compact('grants'));
		
	}

	/*
	 *  Email Grant Form
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
          $message = 'Failed to send. Please check the reCaptacha box.';
   			return  redirect()->back()
				->with('alert-danger', $message)
				->withErrors($validator)
	            ->withInput(\Input::except('password'));
        }

        $secret = ENV("RECAPTCHA_SECRET");
        $response=json_decode(file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secret."&response=".$captcha."&remoteip=".$_SERVER['REMOTE_ADDR']), true);
        if($response['success'] == false){
        	$message = 'Failed to send.' + $response;
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
			$subject = "ATTN " & $department & ": " & $subject;
		}
		else{
			$department =  "General";
		}    

        Mail::send('emails.contact.send', 
        	['from' => $from, 'to' => $to, 'subject' => $subject, 'department' => $department, 'body' => $body], 
        	function ($m) use ($from, $to, $subject, $department, $body)
        {

            $m->from(env('MAIL_FROM_EMAIL'), $from->full_name );
            $m->to($to->email, $to->full_name)->subject($subject);

        });

        $message = 'Successfully sent. Thank you!';
    	
		return  Redirect::to(URL::previous())
			->with('alert-success', $message); 
	}

	/**
	 * View grant
	 * @return Response
	 */
	public function show($id)
	{	
		return view('grants.show');
	}


	/**
	 * Create grant
	 * @return Response
	 */
	public function create()
	{	
		$author = new User;

        if(\Auth::check()){
            $author = \Auth::user();        
        } else {
            $message = 'You must be logged in to request a grant.';
            return \Redirect::to('grants/')
                ->with('alert-danger', $message)
                ;
        }

		return view('grants.create');
	}

	 /**
	 * Store Instructor
	 * @return Response
	 */
	public function store(Request $request)
	{	
       
		//validate
       //read more on validation at http://laravel.com/docs/validation
        $rules = array(
           	'title'			 => 'required|max:255',
        	'amount'		 => 'required',
        	'need_date'		 => 'required',
        	'body'			 => 'required',
        	'is_member'		 => 'required',

        );
        $validator = \Validator::make(\Input::all(), $rules);

        if ($validator->fails()) {

        	$message = 'Failed to submit grant.';
            return redirect()->back()
				->with('alert-danger', $message)
                ->withErrors($validator)
                ->withInput(\Input::except('password'));
        } else {
            // store
            
	        $grant = new Grant;
	        $grant->user_id= $rquest->get('user_id');
	        $grant->is_member= $rquest->get('is_member');
	        $grant->need_date = $request->get('need_date');
	        $grant->title = $request->get('title');
	        $grant->body = $request->get('body'); 
	        $grant->amount= $rquest->get('amount');
			$grant->save();

		   // redirect
            \Session::flash('message', 'Successfully created grant');

			return  redirect()->route('admin.grants')
				->with('flash-message','message');  
		}
	}
	/**
	 * Edit grant
	 * @return Response
	 */
	public function edit($id)
	{	

        $grant = Instructor::find($id);

		return view('admin.grants.edit', compact('grant'));
	}

	/**
	 * Update grant
	 * @return Response
	 */
	public function update(Request $request, $id)
	{	
       
		//validate
       //read more on validation at http://laravel.com/docs/validation
        $rules = array(
        	'title'			 => 'required|max:255',
        	'amount'		 => 'required',
        	'date_need'		 => 'required',
        	'body'			 => 'required',
        	'is_member'		 => 'required',
        );
        $validator = \Validator::make(\Input::all(), $rules);

        if ($validator->fails()) {

        	$message = 'Failed to update grant.';
            return redirect()->back()
				->with('alert-danger', $message)
                ->withErrors($validator)
                ->withInput(\Input::except('password'));
        } else {
            // store
            
			$grant = grant::find($id);

			$grant->first_name = \Input::get('first_name');
			$grant->last_name = \Input::get('last_name');
			$grant->email = \Input::get('email');
			$grant->usar_id = \Input::get('usar_id');
			$grant->level = \Input::get('level');
			$grant->date_certified = \Input::get('date_certified');
			$grant->valid_until = \Input::get('valid_until');
			$grant->city = \Input::get('city');
			$grant->state = \Input::get('state');
			$grant->phone = \Input::get('phone');
			$grant->facebook = \Input::get('facebook');
			$grant->quote = \Input::get('quote');
			$grant->blurb = \Input::get('blurb');

			//$grant->logo = \Input::get('logo');

			$grant->save();

		   // redirect
            \Session::flash('message', 'Successfully updated grant');

			return  redirect()->route('admin.grants')
				->with('flash-message','message');  
		}
	}

    /**
     * Delete grant.
     *
     * @return Response
     */
    public function delete($id)
    {
         $grant = Instructor::find($id);
         $grant->delete();

         // redirect
        \Session::flash('message', 'Successfully deleted grant');
    	return  redirect()->route('admin.grants')
				->with('flash-message','message');  
    }
}