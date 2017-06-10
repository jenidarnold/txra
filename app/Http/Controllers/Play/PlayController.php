<?php namespace App\Http\Controllers\Play;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Redirect;

class PlayController extends Controller {

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
	public function basics(Request $request)
	{
		return view('play/basics');
	}
	
	/**
	 * Display rules.
	 *
	 * @return Response
	 */
	public function rules(Request $request)
	{
		return view('play/rules');
	}
	

	/**
	 * Display skill levels.
	 *
	 * @return Response
	 */
	public function levels(Request $request)
	{
		return view('play/levels');
	}
	
	/**
	 * Display instructors.
	 *
	 * @return Response
	 */
	public function instructors(Request $request)
	{
		return view('play/instructors');
	}
}