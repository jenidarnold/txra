<?php namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Referee;

class RefereeController extends Controller {

	/**
	 * Create a new screen scrape controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
	   $this->middleware('auth');
       $this->middleware('admin_user');
	}

	/**
	 *
	 * @return Response
	 */
	public function index()
	{	

        $referees = Referee::orderBy('last_name')
        	->orderBy('first_name')
        	->paginate(20);
		return view('admin.referees.index', compact('referees'));
	}


	/**
	 * Create referee
	 * @return Response
	 */
	public function create()
	{	
		return view('admin.referees.create');
	}

	 /**
	 * Store Referee
	 * @return Response
	 */
	public function store(Request $request)
	{	
       
		//validate
       //read more on validation at http://laravel.com/docs/validation
        $rules = array(
            'first_name'       => 'required',
            'last_name'       => 'required',
        	'email' => 'required|email',
        );
        $validator = \Validator::make(\Input::all(), $rules);

        if ($validator->fails()) {

        	$message = 'Failed to update referee.';
            return redirect()->back()
				->with('alert-danger', $message)
                ->withErrors($validator)
                ->withInput(\Input::except('password'));
        } else {
            // store
            
	        $referee = new Referee;
	        $referee->first_name = $request->get('first_name');
	        $referee->last_name = $request->get('last_name');
	        $referee->email = $request->get('email');
	        $referee->usar_id = $request->get('usar_id');
	        $referee->level = $request->get('level');
	        $referee->date_certified = $request->get('date_certified');
	        $referee->valid_until = $request->get('valid_until');
	        $referee->facebook = $request->get('facebook');
	        $referee->city = $request->get('city');
	        $referee->state = $request->get('state');
	        $referee->phone = $request->get('phone');
	        $referee->quote = $request->get('quote');
	        $referee->blurb = $request->get('blurb');
	        $referee->logo = $request->get('logo');
			$referee->save();

		   // redirect
            \Session::flash('message', 'Successfully created referee');

			return  redirect()->route('admin.referees')
				->with('flash-message','message');  
		}
	}
	/**
	 * Edit referee
	 * @return Response
	 */
	public function edit($id)
	{	

        $referee = Referee::find($id);

		return view('admin.referees.edit', compact('referee'));
	}

	/**
	 * Update referee
	 * @return Response
	 */
	public function update(Request $request, $id)
	{	
       
		//validate
       //read more on validation at http://laravel.com/docs/validation
        $rules = array(
            'first_name'       => 'required',
            'last_name'       => 'required',
        	'email' => 'required|email',
        );
        $validator = \Validator::make(\Input::all(), $rules);

        if ($validator->fails()) {

        	$message = 'Failed to update referee.';
            return redirect()->back()
				->with('alert-danger', $message)
                ->withErrors($validator)
                ->withInput(\Input::except('password'));
        } else {
            // store
            
			$referee = referee::find($id);

			$referee->first_name = \Input::get('first_name');
			$referee->last_name = \Input::get('last_name');
			$referee->email = \Input::get('email');
			$referee->usar_id = \Input::get('usar_id');
			$referee->level = \Input::get('level');
			$referee->date_certified = \Input::get('date_certified');
			$referee->valid_until = \Input::get('valid_until');
			$referee->city = \Input::get('city');
			$referee->state = \Input::get('state');
			$referee->phone = \Input::get('phone');
			$referee->facebook = \Input::get('facebook');
			$referee->quote = \Input::get('quote');
			$referee->blurb = \Input::get('blurb');
	        $referee->logo = $request->get('logo');

			//$referee->logo = \Input::get('logo');

			$referee->save();

		   // redirect
            \Session::flash('message', 'Successfully updated referee');

			return  redirect()->route('admin.referees')
				->with('flash-message','message');  
		}
	}

    /**
     * Delete referee.
     *
     * @return Response
     */
    public function delete($id)
    {
         $referee = Referee::find($id);
         $referee->delete();

         // redirect
        \Session::flash('message', 'Successfully deleted referee');
    	return  redirect()->route('admin.referees')
				->with('flash-message','message');  
    }
}