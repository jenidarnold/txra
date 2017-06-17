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
		
    }
}
