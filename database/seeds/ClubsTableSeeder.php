
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


		Club::create([
			'id' 			=> 	9,
			'name'		    =>	'Landmark Club at Park Central',
			'address' 		=>	'12740 Merit Dr',
			'city' 			=> 	'Dallas',
			'state' 		=> 	'Texas',
			'zip' 			=> 	'75251',	
			'phone'			=>	'972-392-1500',
			'lat'			=>  32.9222405,
			'lng'			=>	-96.770967,
			'type'			=>	'club',
			'courts'		=>	6,
			'info'			=>	'',
			'url'			=>	'http://www.landmarkclub.com/',
		]);


		Club::create([
			'id' 			=> 	10,
			'name'		    =>	'Lockheed Martin Rec Center - CERA',
			'address' 		=>	'3400 Bryant Irvin Rd',
			'city' 			=> 	'Fort Worth',
			'state' 		=> 	'Texas',
			'zip' 			=> 	'76109',	
			'phone'			=>	'817-732-7731',
			'lat'			=>  32.7003487,
			'lng'			=>	-97.4137353,
			'type'			=>	'bus',
			'courts'		=>	3,
			'info'			=>	'',
			'url'			=>	'http://cera-fw.org/fitness-center/',
		]);



		Club::create([
			'id' 			=> 	11,
			'name'		    =>	'Omni Bayfront Corpus Christi Hotel',
			'address' 		=>	'900 N Shoreline Blvd',
			'city' 			=> 	'Corpus Christi',
			'state' 		=> 	'Texas',
			'zip' 			=> 	'78401',	
			'phone'			=>	'361-887-1600',
			'lat'			=>  27.8003898,
			'lng'			=>	-97.3922176,
			'type'			=>	'hotel',
			'courts'		=>	1,
			'info'			=>	'',
			'url'			=>	'https://www.omnihotels.com/hotels/corpus-christi/wellness/fitness-center',
		]);



		Club::create([
			'id' 			=> 	12,
			'name'		    =>	'Parke Way Family Fitness Center',
			'address' 		=>	'2628 Bill Owens Pkwy',
			'city' 			=> 	'Longview',
			'state' 		=> 	'Texas',
			'zip' 			=> 	'75604',	
			'phone'			=>	'903-297-0090',
			'lat'			=>  32.5343519,
			'lng'			=>	-94.7663237,
			'type'			=>	'center',
			'courts'		=>	4,
			'info'			=>	'',
			'url'			=>	'',
		]);

		Club::create([
			'id' 			=> 	13,
			'name'		    =>	'QBI',
			'address' 		=>	'712 S Robinson Dr',
			'city' 			=> 	'Robinson',
			'state' 		=> 	'Texas',
			'zip' 			=> 	'76706',	
			'phone'			=>	'254-644-0120',
			'lat'			=>  31.464042,
			'lng'			=>	-97.110124,
			'type'			=>	'',
			'courts'		=>	2,
			'info'			=>	'',
			'url'			=>	'',
		]);

		Club::create([
			'id' 			=> 	14,
			'name'		    =>	'Rambler Fitness Center',
			'address' 		=>	'1751 1st St. E',
			'city' 			=> 	'Randolph Air Force Base',
			'state' 		=> 	'Texas',
			'zip' 			=> 	'78150',	
			'phone'			=>	'210-652-7263',
			'lat'			=>  29.5421227,
			'lng'			=>	-98.2873419,
			'type'			=>	'base',
			'courts'		=>	3,
			'info'			=>	'',
			'url'			=>	'',
		]);


		Club::create([
			'id' 			=> 	15,
			'name'		    =>	'T Boone Pickens YMCA Downtown Dallas',
			'address' 		=>	'601 N Akard St',
			'city' 			=> 	'Dallas',
			'state' 		=> 	'Texas',
			'zip' 			=> 	'75201',	
			'phone'			=>	'214-954-0500',
			'lat'			=>  32.7849543,
			'lng'			=>	-96.8010787,
			'type'			=>	'ymca',
			'courts'		=>	6,
			'info'			=>	'',
			'url'			=>	'https://www.ymcadallas.org/locations/tboone_pickens/',
		]);

		Club::create([
			'id' 			=> 	16,
			'name'		    =>	'San Antonio College Chandler Physical Education Center',
			'address' 		=>	'1300 San Pedro',
			'city' 			=> 	'San Antonio',
			'state' 		=> 	'Texas',
			'zip' 			=> 	'78212',	
			'phone'			=>	'210-494-5292',
			'lat'			=>  29.4461815,
			'lng'			=>	-98.496824,
			'type'			=>	'college',
			'courts'		=>	10,
			'info'			=>	'',
			'url'			=>	'',
		]);

		Club::create([
			'id' 			=> 	17,
			'name'		    =>	'Sweetwater Country Club',
			'address' 		=>	'4400 Palm Royale Blvd',
			'city' 			=> 	'Sugarland',
			'state' 		=> 	'Texas',
			'zip' 			=> 	'77479',	
			'phone'			=>	'281-980-4100',
			'lat'			=>  29.56842,
			'lng'			=>	-95.6112815,
			'type'			=>	'club',
			'courts'		=>	5,
			'info'			=>	'',
			'url'			=>	'',
		]);
/*
		Club::create([
			'id' 			=> 	17,
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
*/
	}

}