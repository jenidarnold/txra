<?php namespace App\Http\Controllers\Programs;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Redirect;
use App\Credit;

class RewardsController extends Controller {

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('current_user', ['except' => ['index']]);
	
	}
	

	/**
	 * Display index of programs
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{
		return view('programs/rewards/index');
	}


	/**
	 * Display users credits
	 *
	 * @return Response
	 */
	public function show($id)
	{

        //Set Active NAV Link
        $active['profile'] = '';
        $active['settings'] = '';
        $active['referrals'] = 'active';
        $active['rewards'] = '';

		$credits = Credit::where('user_id', '=', $id)
			->orderBy('id','desc')
			->get();
			
		return view('programs/rewards/show', compact('id', 'credits'));
	}

}

