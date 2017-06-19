<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('users')->delete();
		User::create([
			'id' => '1',
			'first_name' => 'Julienne',
			'last_name' => 'Arnold',
			'middle_name' => 'Enid',
			'email' => 'julie.enid@gmail.com',
			'password' => Hash::make('ruph'),
		]);

		User::create([
			'id' => '0',
			'first_name' => 'Guest',
			'last_name' => 'Member',
			'middle_name' => '',
			'email' => 'guest@txra.org',
			'password' => Hash::make('guest1234'),
		]);

		User::create([
			'id' => '31198',
			'first_name' => 'Brad',
			'last_name' => 'Giezentanner',
			'middle_name' => '',
			'email' => 'brad@txra.org',
			'password' => Hash::make('board'),
		]);

		User::create([
			'id' => '140318',
			'first_name' => 'Dale',
			'last_name' => 'Gosser',
			'middle_name' => '',
			'email' => 'dale@txra.org',
			'password' => Hash::make('board'),
		]);
		
		User::create([
			'id' => '170599',
			'first_name' => 'Mike',
			'last_name' => 'Sorensen',
			'middle_name' => '',
			'email' => 'sorensen@txra.org',
			'password' => Hash::make('board'),
		]);
    }
}
