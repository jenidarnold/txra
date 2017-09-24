<?php namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Tournament;

class EventController extends Controller {

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

        $events = Tournament::orderBy('start_date', 'desc')
        	->paginate(20);
		return view('admin.events.index', compact('events'));
	}


	/**
	 * Create tournament
	 * @return Response
	 */
	public function create($id)
	{	
		return view('admin.tournaments.create');
	}

	 /**
	 * Store Tournament
	 * @return Response
	 */
	public function store(Request $request)
	{	
       
		//validate
       //read more on validation at http://laravel.com/docs/validation
        $rules = array(
            'name'       => 'required',
        );
        $validator = \Validator::make(\Input::all(), $rules);

        if ($validator->fails()) {

        	$message = 'Failed to update tournament.';
            return redirect()->back()
				->with('alert-danger', $message)
                ->withErrors($validator)
                ->withInput(\Input::except('password'));
        } else {
            // store
            
	        $tournament = new Tournament;
	        $tournament->first_name = $request->get('first_name');
	        $tournament->last_name = $request->get('last_name');
	        $tournament->email = $request->get('email');
	        $tournament->usar_id = $request->get('usar_id');
	        $tournament->level = $request->get('level');
	        $tournament->date_certified = $request->get('date_certified');
	        $tournament->valid_until = $request->get('valid_until');
	        $tournament->facebook = $request->get('facebook');
	        $tournament->city = $request->get('city');
	        $tournament->state = $request->get('state');
	        $tournament->phone = $request->get('phone');
			$tournament->save();

		   // redirect
            \Session::flash('message', 'Successfully created tournament');

			return  redirect()->route('admin.tournaments')
				->with('flash-message','message');  
		}
	}
	/**
	 * Edit tournament
	 * @return Response
	 */
	public function edit($id)
	{	

        $tournament = Tournament::find($id);

		return view('admin.tournaments.edit', compact('tournament'));
	}

	/**
	 * Update tournament
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

        	$message = 'Failed to update tournament.';
            return redirect()->back()
				->with('alert-danger', $message)
                ->withErrors($validator)
                ->withInput(\Input::except('password'));
        } else {
            // store
            
			$tournament = tournament::find($id);

			$tournament->name = \Input::get('first_name');
			$tournament->last_name = \Input::get('last_name');
			$tournament->email = \Input::get('email');
			$tournament->usar_id = \Input::get('usar_id');
			$tournament->level = \Input::get('level');
			$tournament->date_certified = \Input::get('date_certified');
			$tournament->valid_until = \Input::get('valid_until');
			$tournament->city = \Input::get('city');
			$tournament->state = \Input::get('state');
			$tournament->phone = \Input::get('phone');
			//$tournament->logo = \Input::get('logo');

			$tournament->save();

		   // redirect
            \Session::flash('message', 'Successfully updated tournament');

			return  redirect()->route('admin.tournaments')
				->with('flash-message','message');  
		}
	}

    /**
     * Delete tournament.
     *
     * @return Response
     */
    public function delete($id)
    {
         $tournament = Tournament::find($id);
         $tournament->delete();

         // redirect
        \Session::flash('message', 'Successfully deleted tournament');
    	return  redirect()->route('admin.tournaments')
				->with('flash-message','message');  
    }
}