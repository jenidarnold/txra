<?php namespace App\Http\Controllers\Members;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Redirect;
use App\User;
use App\Rank;
use App\Scraper;
use App\UsarMember;

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

		//Texas Mens 
		$tms = Rank::orderBy('rank')->limit(10)->get();
		$tmd = Rank::all();
		$tmx = Rank::all();
		
		//Texas Womens 
		$tws = Rank::all();
		$twd = Rank::all();
		$twx = Rank::all();

		//National Mens 
		$nms = Rank::all();
		$nmd = Rank::all();
		$nmx = Rank::all();
		
		//National Womens
		$nws = Rank::all();
		$nwd = Rank::all();
		$nwx = Rank::all();


		$tms->url ="http://www.usaracquetballevents.com/rankings.asp?sortOptions=YES&sex=M&stateID=1";
		$tmd->url ="http://www.usaracquetballevents.com/rankings.asp?sortOptions=YES&sex=MD&stateID=1";
		$tmx->url ="http://www.usaracquetballevents.com/rankings.asp?sortOptions=YES&sex=MX&stateID=1";

		$tws->url ="http://www.usaracquetballevents.com/rankings.asp?sortOptions=YES&sex=F&stateID=1";
		$twd->url ="http://www.usaracquetballevents.com/rankings.asp?sortOptions=YES&sex=WD&stateID=1";
		$twx->url ="http://www.usaracquetballevents.com/rankings.asp?sortOptions=YES&sex=WX&stateID=1";

		$nms->url ="http://www.usaracquetballevents.com/rankings.asp?sortOptions=YES&sex=M&stateID=0";
		$nmd->url ="http://www.usaracquetballevents.com/rankings.asp?sortOptions=YES&sex=MD&stateID=0";
		$nmx->url ="http://www.usaracquetballevents.com/rankings.asp?sortOptions=YES&sex=MX&stateID=0";

		$nws->url ="http://www.usaracquetballevents.com/rankings.asp?sortOptions=YES&sex=F&stateID=0";
		$nwd->url ="http://www.usaracquetballevents.com/rankings.asp?sortOptions=YES&sex=WD&stateID=0";
		$nwx->url ="http://www.usaracquetballevents.com/rankings.asp?sortOptions=YES&sex=WX&stateID=0";

		//need to filter by top effective date
		



		return view('members/rankings/index', compact('tms'));
	}

		
	/**
	 * Display member rankings.
	 *
	 * @return Response
	 */
	public function temp(Request $request)
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