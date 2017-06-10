<?php namespace App\Http\Controllers\Forms;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Redirect;

class NominationController extends Controller {

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
	 * Display basics.
	 *
	 * @return Response
	 */
	public function election(Request $request)
	{
		return view('forms/nominate/election');
	}

	/**
	 * Display basics.
	 *
	 * @return Response
	 */
	public function awards(Request $request)
	{

		return view('forms/nominate/awards');
	}
}
