<?php namespace App\Http\Controllers\Programs;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Redirect;
use App\Reward;

class RewardsController extends Controller {

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
	 * Display index of programs
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{
		return view('programs/rewards/index');
	}


}

