<?php namespace App\Http\Controllers\Forms;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Redirect;

class ContactController extends Controller {

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
	 * Display index of members.
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{
		$toname = $request->to;

		if(\Auth::check()){
			$fromname = \Auth::user()->first_name . ' ' . \Auth::user()->last_name; 
			$from = \Auth::user();
		}

		return view('forms/contact', compact('toname', 'from'));
		
	}
}