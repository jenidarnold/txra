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

            UserProfile::create([
            'id'        =>     2,
            'user_id'   =>     300,
            'gender'    =>  'male',

            'cell_phone'=>  '',
            'home_phone'=>    '',
            'address'   =>  '',
            'zipcode'   =>  '',
            'city'            =>  '',
            'state'           =>    'TX',

            'racquet'   =>    '',
            'skill'           =>    'open',
            'dominant_hand'   =>    'left',

            'bio'       =>    '',

            'facebook'=>      '',
            'twitter'=>       '',
            'linkedin'=>      '',
            'googleplus'=>    '',
            'instagram'=>     '',
            ]);


            UserProfile::create([
            'id'        =>     3,
            'user_id'   =>     400,
            'gender'    =>  'male',

            'cell_phone'=>  '',
            'home_phone'=>    '',
            'address'   =>  '',
            'zipcode'   =>  '',
            'city'            =>  'Cedar Hill',
            'state'           =>    'TX',

            'racquet'   =>    'Head',
            'skill'           =>    'open',
            'dominant_hand'   =>    'right',

            'bio'       =>    '',

            'facebook'=>      '',
            'twitter'=>       '',
            'linkedin'=>      '',
            'googleplus'=>    '',
            'instagram'=>     '',
            ]);

            UserProfile::create([
            'id'        =>     4,
            'user_id'   =>     500,
            'gender'    =>  'male',

            'cell_phone'=>  '',
            'home_phone'=>    '',
            'address'   =>  '',
            'zipcode'   =>  '',
            'city'            =>  'Plano',
            'state'           =>    'TX',

            'racquet'   =>    '',
            'skill'           =>    '',
            'dominant_hand'   =>    'right',

            'bio'       =>    '',

            'facebook'=>      '',
            'twitter'=>       '',
            'linkedin'=>      '',
            'googleplus'=>    '',
            'instagram'=>     '',
            ]);

            UserProfile::create([
            'id'        =>     5,
            'user_id'   =>     19,
            'gender'    =>  'male',

            'cell_phone'=>  '',
            'home_phone'=>    '',
            'address'   =>  '',
            'zipcode'   =>  '',
            'city'            =>  '',
            'state'           =>    'TX',

            'racquet'   =>    '',
            'skill'           =>    '',
            'dominant_hand'   =>    'right',

            'bio'       =>    '',

            'facebook'=>      '',
            'twitter'=>       '',
            'linkedin'=>      '',
            'googleplus'=>    '',
            'instagram'=>     '',
            ]);

            UserProfile::create([
            'id'        =>     6,
            'user_id'   =>     7,
            'gender'    =>  'male',

            'cell_phone'=>  '',
            'home_phone'=>    '',
            'address'   =>  '',
            'zipcode'   =>  '',
            'city'            =>  '',
            'state'           =>    'TX',

            'racquet'   =>    '',
            'skill'           =>    '',
            'dominant_hand'   =>    'right',

            'bio'       =>    '',

            'facebook'=>      '',
            'twitter'=>       '',
            'linkedin'=>      '',
            'googleplus'=>    '',
            'instagram'=>     '',
            ]);
	}
}