<?php
use Illuminate\Database\Seeder;
//use Illuminate\Database\Eloquent\Model;
//use App\Blog;

class BlogTableSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('blog')->delete();
		
     	DB::table('blog')->insert(
              array('title'=>'TXRA Board Elections',
                   'image'=>'brad_giezentanner.png',
                   'author' => 'Sean Arnold',
                   'content' => ' <p>The TXRA Board of Directors announced the results of the recent 2017 Board of Directors Election that filled the four vacancies. Congratulations to Julienne Arnold...</p>',
                   'socialPoint' => 100,
                   'public' => true,
                   'created_at' => '5/1/2017'
                   )  
        );

    	DB::table('blog')->insert(
              array('title'=>'Get Rid of the Dinky Doo',
                   'image'=>'brokenblueball.jpg',
                   'author' => 'Coach Jim Winterton',
                   'content' => ' <p>A dinky-doo is a twist of the wrist in the middle of a swing. It is subtle. An exaggerated dinky doo is called twisty wristy. Fix a dinky doo by flattening out the forehand and backhand throughout the swing. If you have a dinky doo you have increased chances for error. Note: You won’t find these terms anywhere else!</p>',
                   'socialPoint' => 15,
                   'public' => true,
                   'created_at' => '6/1/2017'
                   )  
        );


    	DB::table('blog')->insert(
              array('title'=>'2017 TXRA ANNUAL AWARDS',
                   'image'=>'julienne_arnold.png',
                   'author' => 'Mike Grisz',
                   'content' => ' <p>Congratulations!</p>',
                   'socialPoint' => 35,
                   'public' => true,
                   'created_at' => '4/24/2017'
                   )  
        );
	}
}