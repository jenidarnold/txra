<?php namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\instructor;

class InstructorController extends Controller {

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

		return view('admin.index');
	}

	/**
	 *
	 * @return Response
	 */
	public function instructors()
	{	

        $instructors = Instructor::orderBy('last_name')
        	->orderBy('first_name')
        	->paginate(20);
		return view('admin.instructors.index', compact('instructors'));
	}


	/**
	 * Create instructor
	 * @return Response
	 */
	public function create_instructor($id)
	{	
		return view('admin.instructors.create');
	}

	 /**
	 * Store Instructor
	 * @return Response
	 */
	public function store_instructor(Request $request)
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

        	$message = 'Failed to update instructor.';
            return redirect()->back()
				->with('alert-danger', $message)
                ->withErrors($validator)
                ->withInput(\Input::except('password'));
        } else {
            // store
            
	        $instructor = new Instructor;
	        $instructor->first_name = $request->get('first_name');
	        $instructor->last_name = $request->get('last_name');
	        $instructor->email = $request->get('email');
	        $instructor->usar_id = $request->get('usar_id');
	        $instructor->level = $request->get('level');
	        $instructor->date_certified = $request->get('date_certified');
	        $instructor->valid_until = $request->get('valid_until');
	        $instructor->facebook = $request->get('facebook');
	        $instructor->city = $request->get('city');
	        $instructor->state = $request->get('state');
	        $instructor->phone = $request->get('phone');
	        $instructor->quote = $request->get('quote');
	        $instructor->blurb = $request->get('blurb');
			$instructor->save();

		   // redirect
            \Session::flash('message', 'Successfully created instructor');

			return  redirect()->route('admin.instructors')
				->with('flash-message','message');  
		}
	}
	/**
	 * Edit instructor
	 * @return Response
	 */
	public function edit_instructor($id)
	{	

        $instructor = Instructor::find($id);

		return view('admin.instructors.edit', compact('instructor'));
	}

	/**
	 * Update instructor
	 * @return Response
	 */
	public function update_instructor(Request $request, $id)
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

        	$message = 'Failed to update instructor.';
            return redirect()->back()
				->with('alert-danger', $message)
                ->withErrors($validator)
                ->withInput(\Input::except('password'));
        } else {
            // store
            
			$instructor = instructor::find($id);

			$instructor->first_name = \Input::get('first_name');
			$instructor->last_name = \Input::get('last_name');
			$instructor->suffix = \Input::get('suffix');
			$instructor->email = \Input::get('email');
			$instructor->usar_id = \Input::get('usar_id');
			$instructor->level = \Input::get('level');
			$instructor->date_certified = \Input::get('date_certified');
			$instructor->valid_until = \Input::get('valid_until');
			$instructor->city = \Input::get('city');
			$instructor->state = \Input::get('state');
			$instructor->phone = \Input::get('phone');
			$instructor->facebook = \Input::get('facebook');
			$instructor->quote = \Input::get('quote');
			$instructor->blurb = \Input::get('blurb');

			//$instructor->logo = \Input::get('logo');

			$instructor->save();

		   // redirect
            \Session::flash('message', 'Successfully updated instructor');

			return  redirect()->route('admin.instructors')
				->with('flash-message','message');  
		}
	}

    /**
     * Delete instructor.
     *
     * @return Response
     */
    public function delete_instructor($id)
    {
         $instructor = Instructor::find($id);
         $instructor->delete();

         // redirect
        \Session::flash('message', 'Successfully deleted instructor');
    	return  redirect()->route('admin.instructors')
				->with('flash-message','message');  
    }
}