<?php namespace App\Http\Controllers\Play;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Redirect;
use App\Club;
use App\Instructor;
use App\OpenGraph;
use App\OpenGraphFree;
use App\Checkin;

class MapController extends Controller {

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
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function getClubs()
	{
		return response()->json(Club::get());
	}


}