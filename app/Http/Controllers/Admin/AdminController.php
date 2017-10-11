<?php namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Invite;

class AdminController extends Controller {

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
	public function users()
	{	

        $users = User::orderBy('id','desc')
        	->paginate(40);


        $date_since = \Carbon\Carbon::today()->subDays(7);

        $stats = collect();

        $stats->total = User::count();
        $stats->new = User::where('created_at', '>=', $date_since)->count();
        $stats->not_linked = User::where('usar_id', '=', 0)->count();


		return view('admin.users.index', compact('users', 'stats'));
	}

	/**
	 * Edit User
	 * @return Response
	 */
	public function edit_user($id)
	{	

        $user = User::find($id);

		return view('admin.users.edit', compact('user'));
	}

	/**
	 * Update User
	 * @return Response
	 */
	public function update_user(Request $request, $id)
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

        	$message = 'Failed to update user.';
            return redirect()->back()
				->with('alert-danger', $message)
                ->withErrors($validator)
                ->withInput(\Input::except('password'));
        } else {
            // store
            
			$user = User::find($id);

			$user->first_name = \Input::get('first_name');
			$user->middle_name = \Input::get('middle_name');
			$user->last_name = \Input::get('last_name');
			$user->suffix = \Input::get('suffix');
			$user->email = \Input::get('email');
			$user->usar_id = \Input::get('usar_id');
			$user->save();

		   // redirect
            \Session::flash('message', 'Successfully updated user');

			return  redirect()->route('admin.users')
				->with('flash-message','message');  
		}
	}

    /**
     * Delete user.
     *
     * @return Response
     */
    public function delete_user($id)
    {
         $user = User::find($id);
         $user->delete();

         // redirect
        \Session::flash('message', 'Successfully deleted user');
    	return  redirect()->route('admin.users')
				->with('flash-message','message');  
    }


	/**
	 *
	 * @return Response
	 */
	public function invites()
	{	

        $invites = Invite::orderBy('accepted_at', 'desc')
        	->orderBy('sent')
        	->orderBy('created_at', 'desc')
        	->paginate(50);


        $stats = collect();

        $stats->total = Invite::count();
        $stats->sent = Invite::where('sent', 1)->count();
        $stats->unsent = Invite::where('sent', 0)->count();
        $stats->accepted = Invite::where('accepted', 1)->count();
        $stats->pending = Invite::where('sent', 1)->where('accepted', 0)->count();

		return view('admin.invites.index', compact('invites', 'stats'));
	}

	/**
	 * Create Invite
	 * @return Response
	 */
	public function create_invite()
	{	

		return view('admin.invites.create');
	}

	/**
	 * Edit Invite
	 * @return Response
	 */
	public function edit_invite($id)
	{	

        $invite = Invite::find($id);

		return view('admin.invites.edit', compact('invite'));
	}

    /**
     * Delete invite.
     *
     * @return Response
     */
    public function delete_invite($id)
    {
         $invite = Invite::find($id);
         $invite->delete();

         // redirect
        \Session::flash('message', 'Successfully deleted invite');
    	return  redirect()->route('admin.invites')
				->with('flash-message','message');  
    }

    /**
	 * Update Invite
	 * @return Response
	 */
	public function update_invite(Request $request, $id)
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

        	$message = 'Failed to update invite.';
            return redirect()->back()
				->with('alert-danger', $message)
                ->withErrors($validator)
                ->withInput(\Input::except('password'));
        } else {
            // store
            
			$invite = Invite::find($id);

			$invite->first_name = \Input::get('first_name');
			$invite->last_name = \Input::get('last_name');
			$invite->email = \Input::get('email');
			$invite->save();

		   // redirect
            \Session::flash('message', 'Successfully updated invite');

			return  redirect()->route('admin.invites')
				->with('flash-message','message');  
		}
	}

	 /**
	 * Store Invite
	 * @return Response
	 */
	public function store_invite(Request $request)
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

        	$message = 'Failed to update invite.';
            return redirect()->back()
				->with('alert-danger', $message)
                ->withErrors($validator)
                ->withInput(\Input::except('password'));
        } else {
            // store
            
	        $data = [];
	        $data['first_name'] =  $request->get('first_name');
	        $data['last_name'] =  $request->get('last_name');
	        $data['email'] =  $request->get('email');

	        $invite = new Invite;
	        $invite = $invite->create_with_token($data);

		   // redirect
            \Session::flash('message', 'Successfully created invite');

			return  redirect()->route('admin.invites')
				->with('flash-message','message');  
		}
	}

	/**
	 *
	 * @return Response
	 */
	public function rankings()
	{	
		return view('admin.rankings.index');
	}
}