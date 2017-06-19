
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


		Club::create([
			'id' 			=> 	4,
			'name'		    =>	'Abrams Physical Fitness Center',
			'address' 		=>	'Support Ave & 62nd St',
			'city' 			=> 	'Fort Hood',
			'state' 		=> 	'Texas',
			'zip' 			=> 	'76544',	
			'phone'			=>	'254-287-2016',
			'lat'			=>  31.1382094,
			'lng'			=>	-97.7773225,
			'type'			=>	'base',
			'courts'		=>	4,
			'info'			=>	'',
			'url'			=>	'https://hood.armymwr.com/programs/fitness-center',
		]);

		Club::create([
			'id' 			=> 	5,
			'name'		    =>	'Corpus Christi Athletic Club',
			'address' 		=>	'2101 Airline Rd',
			'city' 			=> 	'Corpus Christi',
			'state' 		=> 	'Texas',
			'zip' 			=> 	'78413',	
			'phone'			=>	'361-992-7100',
			'lat'			=>  27.691695,
			'lng'			=>	-97.3647334,
			'type'			=>	'club',
			'courts'		=>	3,
			'info'			=>	'',
			'url'			=>	'http://corpuschristiathleticclub.com/',
		]);

		Club::create([
			'id' 			=> 	6,
			'name'		    =>	'Haynes Health & Wellness Center',
			'address' 		=>	'2202 Clark\'s Crossing',
			'city' 			=> 	'Laredo',
			'state' 		=> 	'Texas',
			'zip' 			=> 	'78043',	
			'phone'			=>	'956-729-4600',
			'lat'			=>  27.5162541,
			'lng'			=>	-99.4595204,
			'type'			=>	'',
			'courts'		=>	3,
			'info'			=>	'',
			'url'			=>	'https://www.facebook.com/pages/Haynes-Health-Wellness-Center/248876325207544',
		]);	


		Club::create([
			'id' 			=> 	7,
			'name'		    =>	'Del Mar College',
			'address' 		=>	'101 Baldwin Blvd',
			'city' 			=> 	'Corpus Christi',
			'state' 		=> 	'Texas',
			'zip' 			=> 	'78404',	
			'phone'			=>	'361-698-1200',
			'lat'			=>  27.7635746,
			'lng'			=>	-97.4076327,
			'type'			=>	'college',
			'courts'		=>	4,
			'info'			=>	'',
			'url'			=>	'http://dmc122011.delmar.edu/kine/facilityrechours.html',
		]);


		Club::create([
			'id' 			=> 	8,
			'name'		    =>	'Gold\'s Gym Hill Country Village',
			'address' 		=>	'15759 San Pedro Ave',
			'city' 			=> 	'San Antonio',
			'state' 		=> 	'Texas',
			'zip' 			=> 	'78232',	
			'phone'			=>	'210-490-9161',
			'lat'			=>  29.5859171,
			'lng'			=>	-98.4765759,
			'type'			=>	'club',
			'courts'		=>	1,
			'info'			=>	'',
			'url'			=>	'http://www.goldsgym.com/san-antonio-hill-country-village/',
		]);

/*
		Club::create([
			'id' 			=> 	9,
			'name'		    =>	'',
			'address' 		=>	'',
			'city' 			=> 	'',
			'state' 		=> 	'Texas',
			'zip' 			=> 	'',	
			'phone'			=>	'',
			'lat'			=>  ,
			'lng'			=>	,
			'type'			=>	'',
			'courts'		=>	4,
			'info'			=>	'',
			'url'			=>	'',
		]);


		Club::create([
			'id' 			=> 	10,
			'name'		    =>	'',
			'address' 		=>	'',
			'city' 			=> 	'',
			'state' 		=> 	'Texas',
			'zip' 			=> 	'',	
			'phone'			=>	'',
			'lat'			=>  ,
			'lng'			=>	,
			'type'			=>	'',
			'courts'		=>	4,
			'info'			=>	'',
			'url'			=>	'',
		]);*/

	}

}