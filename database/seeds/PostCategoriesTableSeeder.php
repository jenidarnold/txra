<?php
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\PostCategory;

class PostCategoriesTableSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('post_categories')->delete();
		
		PostCategory::create([
			'id' 			=> 	 1,
			'category' 		=>	'Breaking News',	
		]);

		PostCategory::create([
			'id' 			=> 	 2,
			'category' 		=>	'Player Spotlight',	
		]);

		PostCategory::create([
			'id' 			=> 	 3,
			'category' 		=>	'Tip of the Day',	
		]);

		PostCategory::create([
			'id' 			=> 	 4,
			'category' 		=>	'Junior Program',	
		]);

		PostCategory::create([
			'id' 			=> 	 5,
			'category' 		=>	'Members',	
		]);

		PostCategory::create([
			'id' 			=> 	 6,
			'category' 		=>	'Events',	
		]);

		PostCategory::create([
			'id' 			=> 	 7,
			'category' 		=>	'Rules',	
		]);

		PostCategory::create([
			'id' 			=> 	 8,
			'category' 		=>	'Strategic Plans',	
		]);
		
		PostCategory::create([
			'id' 			=> 	 9,
			'category' 		=>	'Board Minutes',	
		]);

		PostCategory::create([
			'id' 			=> 	 10,
			'category' 		=>	'Board News',	
		]);
	}
}