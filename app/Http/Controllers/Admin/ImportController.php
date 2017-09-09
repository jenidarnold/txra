<?php namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Invite;

class ImportController extends Controller {

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
	 * Index of Import options
	 *
	 * @return Response
	 */
	public function index()
	{	

        $users = User::all();
		return view('admin.users.index', compact('users'));
	}

	/**
	 * Import Users
	 *
	 * @return Response
	 */
	public function import_users(Request $request)
	{	

 		if($request->file('imported-file'))
      	{
            $path = $request->file('imported-file')->getRealPath();
            $data = \Excel::load($path, function($reader) {})->get();

            if(!empty($data) && $data->count())
	      	{
	        
	        	$data = $data->toArray();
	        
		        for($i=0;$i<count($data) ;$i++)
		        {
		          	//$dataImported[] = $data[$i];
		          	$user = new User;
		          	$user->create_profile($data[$i]);
		        }
            }
        }
        return back();
	}

	/**
	 * Import Users
	 *
	 * @return Response
	 */
	public function import_invites(Request $request)
	{	

 		if($request->file('imported-file'))
      	{
            $path = $request->file('imported-file')->getRealPath();
            $data = \Excel::load($path, function($reader) {})->get();

            if(!empty($data) && $data->count())
	      	{
	        
	        	$data = $data->toArray();
	        
		        for($i=0;$i<count($data) ;$i++)
		        {
		          	$invite = new Invite;
        			$invite = $invite->create_with_token($data);
		        }


            }
        }

        $invites = Invite::all()->get();
        return back()->with('invites');
	}
}
