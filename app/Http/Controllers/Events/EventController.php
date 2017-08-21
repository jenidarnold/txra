<?php namespace App\Http\Controllers\Events;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Redirect;
use App\Tournament;
use App\Scraper;

class EventController extends Controller {

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
	 * Download tournaments.
	 *
	 * @return Response
	 */
	public function download($location, $type)
	{
		//Move to Admin
		$time_period = $type; //$request->input('time_period');
		$location =  $location; //Location::find($location_id)->location;
		$ss = new Scraper();
		$tournaments = $ss->get_tournaments($location, $time_period);

		$tournaments = Tournament::all();
		$page = (object) [ 
			'title' => 'Index' 
			];
		return view('events/index', compact('tournaments', 'page', 'type'));
	}

	/**
	 * Display index of events.
	 *
	 * @return Response
	 */
	public function index($type)
	{
		$type = strtoupper($type);

		if ( strtolower($type) == 'live') {
			
			$tournaments = Tournament::live();

		}elseif ( strtolower($type) =='future') {
			
			$tournaments = Tournament::future();

		}elseif (strtolower($type) =='recent') {
			
			$tournaments = Tournament::past(90);	

		}elseif (strtolower($type) =='ladder') {		
			$tournaments = Tournament::live()
				->where('name', 'like', '%Ladder')
				;				
		}else {
			$tournaments = Tournament::past();	
		}
		
		//Filter out Ladders
		if (strtolower($type) != 'ladder'){
			$tournaments = $tournaments
				->where('name', 'not like', '%Ladder')
				;
		}

		//final tournaments
		$tournaments = $tournaments->paginate(9);

		$page = (object) [ 
			'title' => 'Index' 
			];
		return view('events/index', compact('tournaments', 'page', 'type'));
	}

		
	/**
	 * Display index of events.
	 *
	 * @return Response
	 */
	public function show($tournament_id)
	{

		$tournament = Tournament::find($tournament_id);
		$page = (object) [ 
			'title' => 'Info' 
			];



		return view('events/show', compact('tournament', 'page'));
	}

	/**
	 * Display event scores
	 *
	 * @return Response
	 */
	public function scores($tournament_id)
	{

		$tournament = Tournament::find($tournament_id);
		$scores = [];
		$page = (object) [ 
			'title' => 'Scores' 
			];
		return view('events/scores', compact('tournament', 'page'));
	}	

	/**
	 * Display event participants
	 *
	 * @return Response
	 */
	public function participants($tournament_id)
	{

		$tournament = Tournament::find($tournament_id);
		$participants = [];
		$page = (object) [ 
			'title' => 'Participants' 
			];

		return view('events/participants', compact('tournament', 'participants', 'page'));
	}

	/**
	 * Display event gallery
	 *
	 * @return Response
	 */
	public function gallery($tournament_id)
	{

		$tournament = Tournament::find($tournament_id);
		$page = (object) [ 
			'title' => 'Gallery' 
			];

		return view('events/gallery', compact('tournament', 'page'));
	}	

}