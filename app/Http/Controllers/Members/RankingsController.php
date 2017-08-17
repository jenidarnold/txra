<?php namespace App\Http\Controllers\Members;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Redirect;
use App\User;
use App\Rank;
use App\Scraper;

class RankingsController extends Controller {

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
		//$this->middleware('current_user', ['except' => ['index', 'show', 'membership', 'rankings', 'home', 'matches']]);
	}
		
	/**
	 * Display member rankings.
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{

		return view('members/rankings');
	}

	/**
	 * Download tournaments.
	 *
	 * @return Response
	 */
	public function download($group_id)
	{

		//Move to Admin
		$location_id =  1; //"Texas"; //Location::find($location_id)->location;
		$maxRank = 10;

		$ss = new Scraper();
		$tournaments = $ss->get_rankings($group_id, $location_id, $maxRank );

		$rankings = Rank::all();

		return view('members/rankings', compact('$rankings', 'group'));
	}

}