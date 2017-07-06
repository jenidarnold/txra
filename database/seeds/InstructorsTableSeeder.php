<?php
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Instructor;

class InstructorsTableSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('instructors')->delete();
		
		Instructor::create([
			'id' 				=> 	1,
			'usar_id' 			=>	1,	
			'first_name'		=>	'Kane',
			'last_name'			=>	'Waselenchuk',
			'level'				=> 	1,
			'date_certified' 	=> 	'',
			'valid_until'		=>	'',
			'city'				=>	'Austin',
			'state'				=> 	'Texas',
			'phone'				=>	'',
			'email'				=>	'kanewasie@yahoo.com',
			'facebook'			=>	'',
			'quote'				=>	'',
			'blurb'				=>	'',
			'logo'				=>	'',
		]);


		Instructor::create([
			'id' 				=> 	2,
			'usar_id' 			=>	1,	
			'first_name'		=>	'Jansen',
			'last_name'			=>	'Allen',
			'level'				=> 	1,
			'date_certified' 	=> 	'',
			'valid_until'		=>	'',
			'city'				=>	'Dallas',
			'state'				=> 	'Texas',
			'phone'				=>	'',
			'email'				=>	'jansenallen@hotmail.com',
			'facebook'			=>	'',
			'quote'				=>	'',
			'blurb'				=>	'Since starting racquetball at the early age of 4 and becoming a top 8 professional player on tour, I have always wanted to give back to the sport and become an instructor to help others. The USA Racquetball Instructor Program was a great opportunity for me to become more familiar with teaching others and critiquing my coaching skills as well.  I enjoyed learning and successfully completing the Instructor Program with Fran Davis in San Antonio, Texas at the YMCA.  This is my first certification and I look forward to working with others to help improve their game.  Texas racquetball has always been the home of many great racquetball players and I hope to continue this trend by promoting the junior program and growing the sport.  I would recommend this great program to anyone who loves racquetball and teaching others.',
			'logo'				=>	'JansenAllen.jpg',
		]);

		Instructor::create([
			'id' 				=> 	3,
			'usar_id' 			=>	1,	
			'first_name'		=>	'Jesse',
			'last_name'			=>	'Baza',
			'level'				=> 	1,
			'date_certified' 	=> 	'',
			'valid_until'		=>	'',
			'city'				=>	'San Antonio',
			'state'				=> 	'Texas',
			'phone'				=>	'',
			'email'				=>	'jessebaza@yahoo.com',
			'facebook'			=>	'',
			'quote'				=>	'',
			'blurb'				=>	'When I was at Texas A&M (many years ago when I had a full head of hair and 50 lbs. lighter) I took my first racquetball course and quickly got hooked on the game.  It was in this class that I met Lance Gilliam, also from San Antonio, who was kind enough to teach me a thing or two about the sport and we remain friends to this day.  I later found out Lance was the Grand Puba of racquetball and continues to promote the sport in San Antonio.  Over the years I’ve also kept involved with the sport, became an Alamo City Racquetball instructor and began teaching beginners and juniors at several gyms.  However, I only recently completed my USAR-IP certification with Fran Davis at the YMCA Henderson Pass in August 2014.  The certification gives validation and the credentials needed to inspire confidence to teach the game properly.  Fran is a great coach/mentor who has taught me to be a better coach on how to teach, talk, demonstrate, reinforce and encourage students.  Her simple tips even improved my game tremendously!  I highly recommend taking this certification if you love racquetball and teaching.  It’s a great way to continually remind yourself of the basics which is the best foundation to the game.',
			'logo'				=>	'2015jessebaza.jpg',
		]);

		Instructor::create([
			'id' 				=> 	4,
			'usar_id' 			=>	1,	
			'first_name'		=>	'Jerry',
			'last_name'			=>	'Fronczak',
			'level'				=> 	1,
			'date_certified' 	=> 	'',
			'valid_until'		=>	'',
			'city'				=>	'Georgetown',
			'state'				=> 	'Texas',
			'phone'				=>	'',
			'email'				=>	'jerry47045@aol.com',
			'facebook'			=>	'',
			'quote'				=>	'',
			'blurb'				=>	'',
			'logo'				=>	'',
		]);

		Instructor::create([
			'id' 				=> 	5,
			'usar_id' 			=>	1,	
			'first_name'		=>	'Tyrone',
			'last_name'			=>	'Gilmore',
			'level'				=> 	1,
			'date_certified' 	=> 	'',
			'valid_until'		=>	'',
			'city'				=>	'San Antonio',
			'state'				=> 	'Texas',
			'phone'				=>	'',
			'email'				=>	'timan97@yahoo.com',
			'facebook'			=>	'',
			'quote'				=>	'',
			'blurb'				=>	'',
			'logo'				=>	'',
		]);

		Instructor::create([
			'id' 				=> 	6,
			'usar_id' 			=>	1,	
			'first_name'		=>	'Briana',
			'last_name'			=>	'Jacquet',
			'level'				=> 	1,
			'date_certified' 	=> 	'',
			'valid_until'		=>	'',
			'city'				=>	'Port Arthur',
			'state'				=> 	'Texas',
			'phone'				=>	'',
			'email'				=>	'thebriutiful1@yahoo.com',
			'facebook'			=>	'',
			'quote'				=>	'',
			'blurb'				=>	'',
			'logo'				=>	'',
		]);

		Instructor::create([
			'id' 				=> 	7,
			'usar_id' 			=>	1,	
			'first_name'		=>	'Mike',
			'last_name'			=>	'Sorensen',
			'level'				=> 	1,
			'date_certified' 	=> 	'',
			'valid_until'		=>	'',
			'city'				=>	'Plano',
			'state'				=> 	'Texas',
			'phone'				=>	'',
			'email'				=>	'mike@performanceracquetball.com',
			'facebook'			=>	'',
			'quote'				=>	'',
			'blurb'				=>	'',
			'logo'				=>	'',
		]);

		Instructor::create([
			'id' 				=> 	8,
			'usar_id' 			=>	1,	
			'first_name'		=>	'George',
			'last_name'			=>	'Weller',
			'level'				=> 	1,
			'date_certified' 	=> 	'',
			'valid_until'		=>	'',
			'city'				=>	'Austin',
			'state'				=> 	'Texas',
			'phone'				=>	'',
			'email'				=>	'',
			'facebook'			=>	'',
			'quote'				=>	'',
			'blurb'				=>	'',
			'logo'				=>	'',
		]);
	}
}