<?php namespace App\Http\Controllers\Programs;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Redirect;

class RefereeController extends Controller {

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}
	
	/**
	 * Display index.
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

