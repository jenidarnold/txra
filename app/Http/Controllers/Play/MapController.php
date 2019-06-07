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
	 * Display map with my location.
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{

		$og = New OpenGraphFree;

		$clubs = Club::where('lat', '>', 0)
				->orderBy('name')
				->get()
			;
		return view('play/checkin', compact('clubs'));
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function getClubs()
	{
		$clubs = Club::where('lat', '>', 0)
			->orderBy('name')
			->get()
		;
		return response()->json($clubs);
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


		//$message = "Checkin Successful";
		// return  Redirect::to(\URL::previous())
		// 	->with('alert-success', $message);
		
		return $this->getClubs();
	}

 
 	public function salesOrder()
    {

    	dd('hello');

        //get the posted JSON data
        $data = file_get_contents('php://input');
        //decode the data
        $decoded_data = json_decode(trim($data));

        // Write to csv
        $timestamp = Carbon::now()->format('Y-m-d-h-m');
        $filename = "SugarSalesOrders-$timestamp.csv";

        //$dataToLog = "";
        //foreach ($request->all() as $name => $value) {
        //    $dataToLog .= $name . ': ' . $value . "\n";
        //}

        \File::append( storage_path('logs' . DIRECTORY_SEPARATOR . $filename), $decoded_data . "\n" . str_repeat("=", 20) . "\n\n");

    }
}