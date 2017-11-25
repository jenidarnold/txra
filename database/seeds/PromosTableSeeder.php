<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Promo;

class PromosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('promos')->delete();
	
		Promo::create([
			'id' => 1,
			'title' => 'Refer a friend and win',
			'description' => 'Send your friends an invitation to create a TXRA.org account and earn credit towards rewards.',
			'active'=> true,
			'credit' =>  25,
		]);

    }
}
