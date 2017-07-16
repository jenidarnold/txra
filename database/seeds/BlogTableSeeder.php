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
                   'image'=>'board/julie_arnold.png',
                   'author' => 'Sean Arnold',
                   'content' => ' <p>The TXRA Board of Directors announced the results of the recent 2017 Board of Directors Election that filled the four vacancies. Congratulations to Julienne Arnold...</p>',
                   'socialPoint' => 1,
                   'public' => true
                   )  
        );
	}
}