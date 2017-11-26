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
			'title' => 'Refer a Friend',
			'description' => 'Send your friends an invitation to create a TXRA.org account and earn credit towards rewards.',
			'active'=> true,
			'credit' =>  25,
		]);

        Promo::create([
            'id' => 2,
            'title' => 'Join & Win!',
            'description' => 'Create a TXRA.org account and earn a chance to win a FREE entry into your next tournanment',
            'active'=> true,
            'credit' =>  0,
            'started_at' => '1/01/18',
            'ended_at' => '2/1/18'
        ]);
    }
}
