
<?php
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Club;

class ClubsTableSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('clubs')->delete();
		
		Club::create([
			'id' 			=> 	 1,
			'name' 			=>	'Clay Madsen Recreation Center',	
			'address' 		=>	'1600 Gattis School Road ',
			'city' 			=> 	'Round Rock',
			'state' 		=> 	'Texas',
			'zip' 			=> 	'78664',	
			'phone'			=>	'512-218-3220',
			'lat'			=>  30.4971805,
			'lng'			=>	-97.6608585,
			'type'			=>	'recreational',
			'courts'		=>	4,
			'info'			=>	'',
			'url'			=>	'https://www.roundrocktexas.gov/departments/parks-and-recreation/facilities/cmrc/',
		]);

		Club::create([
			'id' 			=> 	2,
			'name'		    =>	'Maverick Athletic Club',
			'address' 		=>	'1919 W. Pioneer Pkwy',
			'city' 			=> 	'Arlington',
			'state' 		=> 	'Texas',
			'zip' 			=> 	'76013',	
			'phone'			=>	'817-275-3348',
			'lat'			=>  32.7098963,
			'lng'			=>	-97.1373552,
			'type'			=>	'private',
			'courts'		=>	10,
			'info'			=>	'Visitor fee is only $5 per person',
			'url'			=>	'http://themav.com/',
		]);


		Club::create([
			'id' 			=> 	3,
			'name'		    =>	'Thousand Oaks Family YMCA',
			'address' 		=>	'16101 Henderson Pass',
			'city' 			=> 	'San Antonio',
			'state' 		=> 	'Texas',
			'zip' 			=> 	'78232',	
			'phone'			=>	'210-494-5292',
			'lat'			=>  29.5882997,
			'lng'			=>	-98.4500583,
			'type'			=>	'ymca',
			'courts'		=>	5,
			'info'			=>	'',
			'url'			=>	'http://www.ymcasatx.org/toaks',
		]);

	}

}