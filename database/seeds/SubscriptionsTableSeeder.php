<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Subscription;

class SubscriptionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('subscriptions')->delete();
		Subscription::create([
			'id' => '1',
			'name' => 'TXRA Newsletter',
			'description' => 'TXRA quarterly newsletter',
		]);
		
    }
}
