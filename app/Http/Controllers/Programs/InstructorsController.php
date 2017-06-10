<?php namespace App\Http\Controllers\Programs;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Redirect;

class InstructorsController extends Controller {

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
	 * Display index of members.
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{

		return view('programs/instructors/index');
	}

	/**
	 * Display member profile.
	 *
	 * @return Response
	 */
	public function show(Request $request)
	{

		return view('programs/instructors/show');
	}
}