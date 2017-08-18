<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\UsarMember;

class UsarMembersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('usar_members')->delete();
		
		UsarMember::create([
			'id' => 192412,
			'first_name' => 'Julienne',
			'last_name' => 'Arnold',
			'gender' => 'Female',
			'city' => 'Carrollton',
			'state' => 'Texas',
			'skill' => 'Elite',
			'avatar' => '192412_large.jpg'
		]);
				
		UsarMember::create([
			'id' => 31198,
			'first_name' => 'Bard',
			'last_name' => 'Giezentanner',
			'gender' => 'Male',
			'city' => 'Arlington',
			'state' => 'Texas',
			'skill' => 'Elite',
			'avatar' => ''
		]);

		UsarMember::create([
			'id' => 140318,
			'first_name' => 'Dale',
			'last_name' => 'Gosser',
			'gender' => 'Male',
			'city' => 'Cedar Hill',
			'state' => 'Texas',
			'skill' => 'Elite',
			'avatar' => ''
		]);

		UsarMember::create([
			'id' => 170599,
			'first_name' => 'Mike',
			'last_name' => 'Sorensen',
			'gender' => 'Male',
			'city' => 'Plano',
			'state' => 'Texas',
			'skill' => 'B',
			'avatar' => ''
		]);

		UsarMember::create([
			'id' => 91106,
			'first_name' => 'Sean',
			'last_name' => 'Arnold',
			'gender' => 'Male',
			'city' => 'Houston',
			'state' => 'Texas',
			'skill' => 'A',
			'avatar' => ''
		]);

		UsarMember::create([
			'id' => 30906,
			'first_name' => 'Mike',
			'last_name' => 'Grisz',
			'gender' => 'Male',
			'city' => 'Dallas',
			'state' => 'Texas',
			'skill' => 'Open',
			'avatar' => ''
		]);


    }
}
