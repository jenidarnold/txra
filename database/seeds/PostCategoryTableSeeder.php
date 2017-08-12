<?php

use Illuminate\Database\Seeder;

class PostCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
     	DB::table('post_category')->delete();
		
  	 	DB::table('post_category')->insert(
                array(
                		'post_id'		=> 	1,
                     	'category_id'	=> 	10
                     )  
          );

  	 	DB::table('post_category')->insert(
                array(
                		'post_id'		=> 	2,
                     	'category_id'	=> 	3
                     )  
          );

      DB::table('post_category')->insert(
                array(
                    'post_id'   =>  3,
                      'category_id' =>  2
                     )  
          );
    }
}
