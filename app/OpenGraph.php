<?php namespace App;

namespace App;

use Illuminate\Database\Eloquent\Model;

class OpenGraph extends Model
{
    public static function get_info($url) {
        
    	// http://opengraph.io/app/#!/account 
		// API KEY 598f9a9807efcb0b00a713e3 
		// Free limit to 100; resets after some amount of time

		$siteUrl =  $url;
		$requestUrl = 'https://opengraph.io/api/1.0/site/' . urlencode($siteUrl);
 
		// Make sure you include your free app_id here!  No CC required
		$requestUrl = $requestUrl . '?app_id=598f9a9807efcb0b00a713e3';
 
		$siteInformationJSON = file_get_contents($requestUrl);
		$siteInformation = json_decode($siteInformationJSON, true);
 
		return $siteInformation;

	}
}
