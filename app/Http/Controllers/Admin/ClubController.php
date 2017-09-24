<?php namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Club;

class ClubController extends Controller {

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

        $clubs = Club::orderBy('name')
        	->paginate(30);
		return view('admin.clubs.index', compact('clubs'));
	}


	/**
	 * Create club
	 * @return Response
	 */
	public function create($id)
	{	
		return view('admin.clubs.create');
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

        	$message = 'Failed to update club.';
            return redirect()->back()
				->with('alert-danger', $message)
                ->withErrors($validator)
                ->withInput(\Input::except('password'));
        } else {
            // store
            
	        $club = new Club;
	        $club->name = $request->get('name');
	        $club->address = $request->get('address');
	        $club->city = $request->get('city');
	        $club->state = $request->get('state');
	        $club->zip = $request->get('zip');
	        $club->phone = $request->get('phone');
	        $club->lat = $request->get('lat');
	        $club->lng = $request->get('lng');
	        $club->type = $request->get('type');
	        $club->courts = $request->get('courts');
	        $club->info = $request->get('info');
	        $club->url = $request->get('url');
			$club->save();

		   // redirect
            \Session::flash('message', 'Successfully created club');

			return  redirect()->route('admin.clubs')
				->with('flash-message','message');  
		}
	}
	/**
	 * Edit club
	 * @return Response
	 */
	public function edit($id)
	{	

        $club = Club::find($id);

		return view('admin.clubs.edit', compact('club'));
	}

	/**
	 * Update club
	 * @return Response
	 */
	public function update(Request $request, $id)
	{	
       
		//validate
       //read more on validation at http://laravel.com/docs/validation
        $rules = array(
            'name'       => 'required',
        );
        $validator = \Validator::make(\Input::all(), $rules);

        if ($validator->fails()) {

        	$message = 'Failed to update club.';
            return redirect()->back()
				->with('alert-danger', $message)
                ->withErrors($validator)
                ->withInput(\Input::except('password'));
        } else {
            // store
            
			$club = club::find($id);
       
       		$club->name = $request->get('name');
	        $club->address = $request->get('address');
	        $club->city = $request->get('city');
	        $club->state = $request->get('state');
	        $club->zip = $request->get('zip');
	        $club->phone = $request->get('phone');
	        $club->lat = $request->get('lat');
	        $club->lng = $request->get('lng');
	        $club->type = $request->get('type');
	        $club->courts = $request->get('courts');
	        $club->info = $request->get('info');
	        $club->url = $request->get('url');

			$club->save();

		   // redirect
            \Session::flash('message', 'Successfully updated club');

			return  redirect()->route('admin.clubs')
				->with('flash-message','message');  
		}
	}

    /**
     * Delete club.
     *
     * @return Response
     */
    public function delete($id)
    {
         $club = Clubs::find($id);
         $club->delete();

         // redirect
        \Session::flash('message', 'Successfully deleted club');
    	return  redirect()->route('admin.clubs')
				->with('flash-message','message');  
    }
}