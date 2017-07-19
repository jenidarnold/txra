<?php

use Illuminate\Database\Seeder;

class BlogCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
       	DB::table('blog_category')->delete();
		
	 	DB::table('blog_category')->insert(
              array(
              		'blog_id'		=> 	1,
                   	'category_id'	=> 	1
                   )  
        );

	 	DB::table('blog_category')->insert(
              array(
              		'blog_id'		=> 	1,
                   	'category_id'	=> 	2
                   )  
        );


	 	DB::table('blog_category')->insert(
              array(
              		'blog_id'		=> 	2,
                   	'category_id'	=> 	3
                   )  
        );

	 	DB::table('blog_category')->insert(
              array(
              		'blog_id'		=> 	2,
                   	'category_id'	=> 	4
                   )  
        );
    }
}
