<?php namespace App\Http\Controllers\Programs;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Redirect;
use App\Referee;

class RefereeController extends Controller {

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
	 * Display list of certified Referees.
	 *
	 * @return Response
	 */
	public function listing(Request $request)
	{

		$referees = Referee::all();
		return view('programs/referee/referees', compact('referees'));
	}

	/**
	 * Display index of programs
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{
		return view('programs/referee/index');
	}


	/**
	 * Display juniors.
	 *
	 * @return Response
	 */
	public function juniors(Request $request)
	{
		return view('programs/referee/juniors');
	}

	/**
	 * Display adults.
	 *
	 * @return Response
	 */
	public function adults(Request $request)
	{
		return view('programs/referee/adults');
	}
}

