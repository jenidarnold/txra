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

        $users = User::orderBy('last_name')
        	->orderBy('first_name')
        	->paginate(10);
		return view('admin.users.index', compact('users'));
	}

	/**
	 *
	 * @return Response
	 */
	public function invites()
	{	

        $invites = Invite::orderBy('last_name')
        	->orderBy('first_name')
        	->paginate(10);
		return view('admin.invites.index', compact('invites'));
	}
}