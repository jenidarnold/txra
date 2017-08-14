<?php
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Tournament;
class TournamentsTableSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('tournaments')->delete();
		
		Tournament::create([
			'id'			=> 	'21674',
			'usar_id'		=> 	'21674',
			'name' 			=>	'Crazy Craigs Celebration Tournament',	
			'start_date' 	=> 	'2017-06-03',
			'end_date' 		=> 	'2017-06-04',
			'url' 			=> 	'http://www.r2sports.com/tourney/home.asp?TID=21674',
			'logo' 			=> 	'21674_large.jpg',
		]);

		Tournament::create([
			'id' 			=> 	'21596',
			'usar_id' 		=> 	'21596',
			'name' 			=>	'2017 June Triple Crown Racquetball Shootout',	
			'start_date' 	=> 	'2017-06-10',
			'end_date' 		=> 	'2017-06-11',
			'url' 			=> 	'http://www.r2sports.com/tourney/home.asp?TID=21596',
			'logo' 			=> 	'triplecrown.jpg',
		]);


	}

}