<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Credit;

class CreditsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('credits')->delete();
	
	   Credit::create([
	   		'id' => 1,
            'user_id' => 1,
            'amount' => 50,
            'description' => 'Signup',
            'type_id' => 1
		]);

	   	Credit::create([
	   		'id' => 2,
            'user_id' => 1,
            'amount' => -20,
            'description' => 'Redeem balls',
            'type_id' => 3
		]);

	   Credit::create([
	   		'id' => 3,
            'user_id' => 1,
            'amount' => 25,
            'description' => 'Refer Sally Michael',
            'type_id' => 2
		]);

	   	Credit::create([
	   		'id' => 4,
            'user_id' => 1,
            'amount' => 25,
            'description' => 'Refer John Doe',
            'type_id' => 2
		]);

	   	Credit::create([
	   		'id' => 4,
            'user_id' => 1,
            'amount' => -10,
            'description' => 'Redeem grip',
            'type_id' => 3
		]);
    }
}
