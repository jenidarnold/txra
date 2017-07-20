<?php
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\BlogCategory;

class BlogCategoriesTableSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('blog_categories')->delete();
		
		BlogCategory::create([
			'id' 			=> 	 1,
			'category' 		=>	'Breaking News',	
		]);

		BlogCategory::create([
			'id' 			=> 	 2,
			'category' 		=>	'Player Spotlight',	
		]);

		BlogCategory::create([
			'id' 			=> 	 3,
			'category' 		=>	'Tip of the Day',	
		]);

		BlogCategory::create([
			'id' 			=> 	 4,
			'category' 		=>	'Junior Program',	
		]);

		BlogCategory::create([
			'id' 			=> 	 5,
			'category' 		=>	'Members',	
		]);

		BlogCategory::create([
			'id' 			=> 	 6,
			'category' 		=>	'Events',	
		]);

		BlogCategory::create([
			'id' 			=> 	 7,
			'category' 		=>	'Rules',	
		]);

		BlogCategory::create([
			'id' 			=> 	 8,
			'category' 		=>	'Strategic Plans',	
		]);
		
		BlogCategory::create([
			'id' 			=> 	 9,
			'category' 		=>	'Board Minutes',	
		]);

		BlogCategory::create([
			'id' 			=> 	 10,
			'category' 		=>	'Board News',	
		]);
	}
}