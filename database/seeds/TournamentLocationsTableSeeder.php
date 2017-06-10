<?php
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\TournamentLocation;

class TournamentLocationsTableSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('tournament_locations')->delete();
		
		TournamentLocation::create([
			'tournament_id'	=>	21674,
			'club_id'		=>	1
		]);

		TournamentLocation::create([
			'tournament_id'	=>	21596,
			'club_id'		=>	2
		]);
	}

}