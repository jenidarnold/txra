<?php namespace App\Http\Controllers\Programs;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Redirect;

class CollegiateController extends Controller {

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
	 * Display index of juniors programs.
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{

		return view('programs/collegiate/index');
	}

	/**
	 * Display juniors landingpage
	 *
	 * @return Response
	 */
	public function welcome(Request $request)
	{

		return view('programs/collegiate/welcome');
	}

}