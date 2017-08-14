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
	public function download($type)
	{
		//Move to Admin
		$time_period = $type; //$request->input('time_period');
		$location =  "Texas"; //Location::find($location_id)->location;
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
		if ($type=='live') {
			$tournaments = Tournament::orderBy('start_date')
				->where('end_date', '>=', date("Y-m-d"))
				->get();
		}elseif ($type=='future') {
			$tournaments = Tournament::orderBy('start_date')
				->where('start_date', '>', date("Y-m-d"))
				->get();
		}else{
			$tournaments = Tournament::orderBy('start_date', 'desc')
				->where('end_date','<', date("Y-m-d"))
				->get();
		}

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