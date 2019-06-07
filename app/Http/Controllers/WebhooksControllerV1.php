<?php 

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Redirect;
use App\Club;
use App\Instructor;
use App\OpenGraph;
use App\OpenGraphFree;
use App\Checkin;

class WebhooksControllerV1 extends Controller
{

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