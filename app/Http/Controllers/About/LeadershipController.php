<?php namespace App\Http\Controllers\About;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Redirect;

class LeadershipController extends Controller {

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
	 * Display index of board members.
	 *
	 * @return Response
	 */
	public function board(Request $request)
	{

		return view('about/board');
	}

		
	/**
	 * Display index of members.
	 *
	 * @return Response
	 */
	public function bylaws(Request $request)
	{

		return view('about/bylaws');
	}
	/**
	 * Display member profile.
	 *
	 * @return Response
	 */
	public function committees(Request $request)
	{

		return view('about/committees');
	}

	/**
	 * Display member profile.
	 *
	 * @return Response
	 */
	public function election(Request $request)
	{

		return view('about/election');
	}
}