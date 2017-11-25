<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\PromoAccept;

class PromoAcceptsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('promo_accepts')->delete();
	
	   PromoAccept::create([
			'promo_id' => 1,
            'user_referrer_id' => 1,
            'user_accept_id' => 500,
            'accepted_at' => '11/1/17',
            'accept_method_id' => 1
		]);

    }
}
