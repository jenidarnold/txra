<?php namespace App\Http\Controllers\Play;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Redirect;
use App\Club;
use App\Instructor;
use App\OpenGraph;

class PlayController extends Controller {

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
	 * Display basics.
	 *
	 * @return Response
	 */
	public function basics(Request $request)
	{		
		
		$sites = collect();
		$links = array(
					"http://www.teamusa.org/USA-Racquetball/How-To-Play",
					"https://www.youtube.com/watch?v=H2Z6A2iNSUM&t=721s",
					"http://www.wikihow.com/Play-Racquetball", 
					"http://www.rulesofsport.com/sports/racquetball.html", 
				);

		$og = New OpenGraph;
		foreach ($links as $link) {
			$sites->push($og->get_info($link));
		}
		return view('play/basics', compact('sites'));
	}
	
	/**
	 * Display rules.
	 *
	 * @return Response
	 */
	public function rules(Request $request)
	{
	
		return view('play/rules');
	}
	

	/**
	 * Display skill levels.
	 *
	 * @return Response
	 */
	public function levels(Request $request)
	{
		return view('play/levels');
	}
	
	/**
	 * Display instructors.
	 *
	 * @return Response
	 */
	public function instructors(Request $request)
	{

		$instructors = Instructor::orderBy('last_name')->get();
			//->orderBy('first_name');

		return view('play/instructors',compact('instructors'));
	}


	/**
	 * Display map of locations .
	 *
	 * @return Response
	 */
	public function map(Request $request)
	{

        //$clubs =  (object) [ 
        //  'position' =>  '{lat: 32.7098963, lng: -97.1373552 }',           
        //];

		$clubs = Club::where('lat', '>', 0)
				->orderBy('name')
				->get()
			;

		$i = 1;
		foreach($clubs as $club) {
			$club->ico = $club->get_map_icon($i);
			$club->info = "<div class='clubInfo'>"
			        ."<h6>".$club->name . "</h6>"
                    ."<address>"
                    . $club->address . "<br/>"
                    . $club->city .", " . $club->state . " " . $club->zip. "<br/>"
                    . $club->phone . "<br/>"
                    ."Courts: " . $club->courts . "<br/>"
                    ."</div>"
			;
			$i++;
		}	

		return view('play/map', compact('clubs'));
	}
	
}