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

		// //Texas Mens 
		// $tms =  Rank::where('group_id', '=','1')->orderBy('rank');
		// $featured = Rank::inRandomOrder()->where('group_id', '=','1')->first();
		// $tms = $tms->limit(10)->get();
		// $tms->featured = $featured;

		//Get Ranks
		$tms = $this->get_rank_by_group(1,1);
		$tws =  $this->get_rank_by_group(2,1);
		$tmd = $this->get_rank_by_group(3,1);
		$twd =  $this->get_rank_by_group(4,1);
		$tmx = $this->get_rank_by_group(5,1);
		$twx =  $this->get_rank_by_group(6,1);

		$nms = $this->get_rank_by_group(1,0);
		$nws =  $this->get_rank_by_group(2,0);
		$nmd = $this->get_rank_by_group(3,0);
		$nwd =  $this->get_rank_by_group(4,0);
		$nmx = $this->get_rank_by_group(5,0);
		$nwx =  $this->get_rank_by_group(6,0);

		//Set titles
		$tms->title = "TX Men's Singles";
		$tws->title = "TX Women's Singles";
		$tmd->title = "TX Men's Doubles";
		$twd->title = "TX Women's Doubles";
		$tmx->title = "TX Men's Mixed";
		$twx->title = "TX Women's Mixed";

		//Set Filters
		$tms->filter = "TX singles men";
		$tws->filter = "TX singles women";
		$tmd->filter = "TX doubles men";
		$twd->filter = "TX doubles women";
		$tmx->filter = "TX mixed men";
		$twx->filter = "TX mixed women";
		
		
		//Set urls
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
		//need to push only if not empty
		$ranks = array();
		if($tms->count() > 0){
			array_push($ranks, $tms);
		}
		if($tws->count() > 0){		
			array_push($ranks, $tws);	
		}
		if($tmd->count() > 0){
			array_push($ranks, $tmd);
		}
		if($twd->count() > 0){
			array_push($ranks, $twd);		
		}
		if($tmx->count() > 0){
			array_push($ranks, $tmx);
		}
		if($twx->count() > 0){
			array_push($ranks, $twx);	
		}


		return view('members/rankings/index', compact('ranks'));
	}

	/*
	
	 */
	public function get_rank_by_group($group_id, $location_id){

		$maxDate =  Rank::where('group_id', '=',$group_id)
					->where('location_id','=', $location_id)
					->orderBy('effective',  'desc')
					->take(1)
					->select('effective')
					->first()
					;

		$rank =  Rank::where('group_id', '=',$group_id)
				->where('location_id','=', $location_id)
				->where('effective', '=', $maxDate['effective'])
				->orderBy('rank');

		//Random Ranking
		$rand = \DB::table('ranks')
			->join('usar_members', 'ranks.usar_id', '=', 'usar_members.id')
			->where('group_id', '=',$group_id)
			->where('location_id','=', $location_id)
			->where('effective', '=', $maxDate['effective'])			
        	->orderBy(\DB::raw('RAND()'))
        	->take(1)
			->first();


		$rank = $rank->limit(10)->get();
		$rank->featured = $rand;
		

		$user_id =  0;
		if ($rand != null) {
			$user = \App\User::where('usar_id' , '=',$rand->usar_id )->first();
			if ($user != null){
				$user_id = $user->id;
			}			
			$rank->featured->user_id = $user_id; 
		}

		return $rank;
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
		$rankings = $ss->get_rankings($group_id, $location_id, $maxRank );

		//$rankings = Rank::all();

		dd($rankings);
	}

}