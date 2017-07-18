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

		Club::create([
			'id' 			=> 	18,
			'name'		    =>	'Tellepsen Family Dwontown YMCA',
			'address' 		=>	'808 Pease St.',
			'city' 			=> 	'Houston',
			'state' 		=> 	'Texas',
			'zip' 			=> 	'77002',	
			'phone'			=>	'713-659-8501',
			'lat'			=>  29.7521368,
			'lng'			=>	-95.3706737,
			'type'			=>	'',
			'courts'		=>	4,
			'info'			=>	'',
			'url'			=>	'https://www.ymcahouston.org/tellepsen-family/',
		]);

		Club::create([
			'id' 			=> 	20,
			'name'		    =>	'Texas A&M Rec Center',
			'address' 		=>	'797 Olsen Blvd',
			'city' 			=> 	'College Station',
			'state' 		=> 	'Texas',
			'zip' 			=> 	'77843',	
			'phone'			=>	'979-845-7826',
			'lat'			=>  30.6070466,
			'lng'			=>	-96.3428697,
			'type'			=>	'college',
			'courts'		=>	10,
			'info'			=>	'',
			'url'			=>	'http://recsports.tamu.edu/',
		]);


		Club::create([
			'id' 			=> 	21,
			'name'		    =>	'Texas A&M University-Kingsville',
			'address' 		=>	'1020 West C Avenue',
			'city' 			=> 	'Kingsville',
			'state' 		=> 	'Texas',
			'zip' 			=> 	'78363',	
			'phone'			=>	'361-593-4771',
			'lat'			=>  27.5278115,
			'lng'			=>	-97.8818321,
			'type'			=>	'college',
			'courts'		=>	4,
			'info'			=>	'',
			'url'			=>	'http://www.tamuk.edu/',
		]);


		Club::create([
			'id' 			=> 	22,
			'name'		    =>	'Texas State University Jowers Center',
			'address' 		=>	'178 Jowers Center',
			'city' 			=> 	'San Marcos',
			'state' 		=> 	'Texas',
			'zip' 			=> 	'78666',	
			'phone'			=>	'512-245-2111',
			'lat'			=>  29.8873956,
			'lng'			=>	-97.9325891,
			'type'			=>	'college',
			'courts'		=>	3,
			'info'			=>	'',
			'url'			=>	'http://www.campusrecreation.txstate.edu/facilities/sports-fields/gm_jowersfields.html',
		]);


		Club::create([
			'id' 			=> 	23,
			'name'		    =>	'Texas State University Student Rec Center',
			'address' 		=>	'1011 Academy St',
			'city' 			=> 	'San Marcos',
			'state' 		=> 	'Texas',
			'zip' 			=> 	'',	
			'phone'			=>	'512-245-2111',
			'lat'			=>  29.8886648,
			'lng'			=>	-97.9505207,
			'type'			=>	'college',
			'courts'		=>	6,
			'info'			=>	'',
			'url'			=>	'http://www.campusrecreation.txstate.edu/hours/SRC.html',
		]);


		Club::create([
			'id' 			=> 	24,
			'name'		    =>	'Texas Tech University Robert H. Ewalt Student Recreation Center',
			'address' 		=>	'3219 Main St.',
			'city' 			=> 	'Lubbock',
			'state' 		=> 	'Texas',
			'zip' 			=> 	'79408',	
			'phone'			=>	'806-742-3351',
			'lat'			=>  33.5854124,
			'lng'			=>	-101.8813124,
			'type'			=>	'',
			'courts'		=>	12,
			'info'			=>	'',
			'url'			=>	'http://www.depts.ttu.edu/recsports/facilities/',
		]);

		Club::create([
			'id' 			=> 	25,
			'name'		    =>	'University of Texas Gregory Gym',
			'address' 		=>	'2101 Speedway',
			'city' 			=> 	'Austin',
			'state' 		=> 	'Texas',
			'zip' 			=> 	'',	
			'phone'			=>	'512-471-6045',
			'lat'			=>  30.2840213,
			'lng'			=>	-97.736342,
			'type'			=>	'college',
			'courts'		=>	10,
			'info'			=>	'',
			'url'			=>	'https://www.utrecsports.org/facilities/facility/gregory-gym',
		]);

		Club::create([
			'id' 			=> 	26,
			'name'		    =>	'University of Texas Recreation Center',
			'address' 		=>	'2001 San Jacinto',
			'city' 			=> 	'Austin',
			'state' 		=> 	'Texas',
			'zip' 			=> 	'78705',	
			'phone'			=>	'512-471-6045',
			'lat'			=>  30.2815045,
			'lng'			=>	-97.732335,
			'type'			=>	'college',
			'courts'		=>	8,
			'info'			=>	'',
			'url'			=>	'https://www.utrecsports.org/facilities/facility/recreational-sports-center',
		]);

		Club::create([
			'id' 			=> 	27,
			'name'		    =>	'University of Texas Rio Grande Valley Wellness and Recreational Sports Complex',
			'address' 		=>	'1201 W Schunior St',
			'city' 			=> 	'Edinburg',
			'state' 		=> 	'Texas',
			'zip' 			=> 	'78541',	
			'phone'			=>	'956-665-7808',
			'lat'			=>  26.3102244,
			'lng'			=>	-98.1736704,
			'type'			=>	'college',
			'courts'		=>	3,
			'info'			=>	'',
			'url'			=>	'http://www.utrgv.edu/urec/',
		]);

		Club::create([
			'id' 			=> 	28,
			'name'		    =>	'WRS Athletic',
			'address' 		=>	'5047 Franklin',
			'city' 			=> 	'Waco',
			'state' 		=> 	'Texas',
			'zip' 			=> 	'76710',	
			'phone'			=>	'254-776-6575',
			'lat'			=>  31.519974,
			'lng'			=>	-97.1772196,
			'type'			=>	'club',
			'courts'		=>	2,
			'info'			=>	'',
			'url'			=>	'http://www.wrsathleticclub.com/',
		]);

		Club::create([
			'id' 			=> 	29,
			'name'		    =>	'YMCA Bill Bartley Branch',
			'address' 		=>	'5001 Bartley Dr',
			'city' 			=> 	'Wichita Falls',
			'state' 		=> 	'Texas',
			'zip' 			=> 	'76308',	
			'phone'			=>	'940-761-1000',
			'lat'			=>  33.8544809,
			'lng'			=>	-98.5142636,
			'type'			=>	'ymca',
			'courts'		=>	6,
			'info'			=>	'',
			'url'			=>	'http://www.ymcawf.org/',
		]);

		Club::create([
			'id' 			=> 	30,
			'name'		    =>	'YMCA Midland',
			'address' 		=>	'800 N. Big Spring St',
			'city' 			=> 	'Midland',
			'state' 		=> 	'Texas',
			'zip' 			=> 	'79701',	
			'phone'			=>	'432-682-2551',
			'lat'			=>  32.0052735,
			'lng'			=>	-102.0776129,
			'type'			=>	'ymca',
			'courts'		=>	4,
			'info'			=>	'',
			'url'			=>	'http://www.midlandymca.org/',
		]);

		Club::create([
			'id' 			=> 	31,
			'name'		    =>	'YMCA of the Coastal Bend',
			'address' 		=>	'417 S Upper Broadway',
			'city' 			=> 	'Corpus Christi',
			'state' 		=> 	'Texas',
			'zip' 			=> 	'78401',	
			'phone'			=>	'361-882-1741',
			'lat'			=>  27.7893353,
			'lng'			=>	-97.3965748,
			'type'			=>	'',
			'courts'		=>	3,
			'info'			=>	'',
			'url'			=>	'http://ymca-cc.org/',
		]);

		/*
		Club::create([
			'id' 			=> 	32,
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
			'id' 			=> 	33,
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