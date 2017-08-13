<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ClubsTableSeeder::class);
        $this->call(InstructorsTableSeeder::class);
        $this->call(MembersTableSeeder::class);
        $this->call(SubscribersTableSeeder::class);
        $this->call(SubscriptionsTableSeeder::class);
        $this->call(TournamentLocationsTableSeeder::class); 
        $this->call(TournamentsTableSeeder::class);       
        $this->call(UsersTableSeeder::class);         
        $this->call(UserProfilesTableSeeder::class);   
        $this->call(PostTableSeeder::class);    
        $this->call(PostCategoriesTableSeeder::class);  
        $this->call(PostCategoryTableSeeder::class);   
    }
}
