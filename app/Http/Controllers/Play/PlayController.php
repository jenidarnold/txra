<?php namespace App\Http\Controllers\Play;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Redirect;
use App\Club;
use App\Instructor;
use App\OpenGraph;
use App\Checkin;

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

	/**
	 * Display map with my location.
	 *
	 * @return Response
	 */
	public function mylocation(Request $request)
	{

		$clubs = Club::where('lat', '>', 0)
				->orderBy('name')
				->get()
			;

		$i = 1;
		foreach($clubs as $club) {
			$club->ico = $club->get_map_icon($i);
			$club->checkins_total = $club->checkins_total;
			$club->checkins_recent = $club->checkins_recent;
			$club->checkin_data = $club->checkin_data;
			$i++;
		}	

		return view('play/checkin', compact('clubs'));
	}
	
	/**
	 *  Insert Checkin club
	 */	
	public function checkin(Request $request)
	{

		/*set client's time*/
		$date = \Carbon\Carbon::now();   

		/*offset should be negative*/
        $date->addMinutes(-$request->gtz_offset);
        $formatted_date = $date->format('Y-m-d H:i:s');

		$client_time =  $formatted_date;

		/*create new checkin*/
		$checkin = new Checkin;
		$checkin->club_id = $request->club_id;
		$checkin->checkin_at = $client_time;
		$checkin->save();


		$message = "Checkin Successful";

		return  Redirect::to(\URL::previous())
			->with('alert-success', $message);
		//return  redirect()->route('play.checkin');
	}

}