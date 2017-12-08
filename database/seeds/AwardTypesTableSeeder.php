<?php
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\AwardType;

class AwardTypesTableSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('award_types')->delete();
		
		AwardType::create([
			'id' 			=> 	 1,
			'title' 		=>	'Ann Gibbons Memorial Sportsmanship',	
			'description'	=>	'Presented to a person who has demonstrated honesty, integrity and fairness during racquetball play, tournaments and all other aspects related to the sport.'
		]);

		AwardType::create([
			'id' 			=> 	 2,
			'title' 		=>	'Male Athlete of the Year',	
			'description'	=>	'Awarded to a male player that has demonstrated significant improvement in performance and demonstrated good sportsmanship on and off the court, in the sport of racquetball.'
		]);

		AwardType::create([
			'id' 			=> 	 3,
			'title' 		=>	'Female Athlete of the Year',	
			'description'	=>	'Awarded to a female player that has demonstrated significant improvement in performance and demonstrated good sportsmanship on and off the court, in the sport of racquetball.'
		]);

		AwardType::create([
			'id' 			=> 	 4,
			'title' 		=>	'Junior Male Athlete of the Year – Under 13',	
			'description'	=>	'Awarded to the male player that is under 13 years old that has demonstrated significant improvement in his performance. Demonstrated good sportsmanship on and off the court.'
		]);

		AwardType::create([
			'id' 			=> 	 5,
			'title' 		=>	'Junior Male Athlete of the Year – Age 13-18',	
			'description'	=>	'Awarded to the male player that is 13 or over and under 18 that has demonstrated significant improvement in his performance. Demonstrated good sportsmanship on and off the court.'
		]);

		AwardType::create([
			'id' 			=> 	 6,
			'title' 		=>	'Junior Female Athlete of the Year – Under 13',	
			'description'	=>	'Awarded to the female player that is under 13 years old that has demonstrated significant improvement in his performance. Demonstrated good sportsmanship on and off the court.'
		]);

		AwardType::create([
			'id' 			=> 	 7,
			'title' 		=>	'Junior Female Athlete of the Year – Age 13-18',	
			'description'	=>	'Awarded to the female player that is 13 or over and under 18 that has demonstrated significant improvement in his performance. Demonstrated good sportsmanship on and off the court.'
		]);

		AwardType::create([
			'id' 			=> 	 8,
			'title' 		=>	'Outstanding Racquetball Contributor',	
			'description'	=>	'Presented to a male or female that has demonstrated commitment to the sport and has volunteered time above and beyond to enhance the sport of racquetball in Texas.'
		]);

	}
}