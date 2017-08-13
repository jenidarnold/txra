<?php
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\UserProfile;

class UserProfilesTableSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('user_profiles')->delete();
		
		UserProfile::create([
		'id' 		=> 	 1,
            'user_id'   =>     1,
            'gender'	=>  'female',

            'cell_phone'=>  '',
            'home_phone'=>	'',
            'address'	=>  '',
            'zipcode'	=>  '75007',
            'city'		=>  'Carrollton',
            'state'		=>	'TX',

            'racquet'	=>	'Gearbox',
            'skill'		=>	'elite',
            'dominant_hand'	=>	'right',

            'bio'		=>	'Hello, rballers!',

            'facebook'=>	'',
            'twitter'=>		'',
            'linkedin'=>	'',
            'googleplus'=>	'',
            'instagram'=>	'',
		]);

	}
}