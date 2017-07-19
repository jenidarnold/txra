<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('blog_category', function(Blueprint $table)
        {
            $table->integer('blog_id')->unsigned()->index();
            $table->integer('category_id')->unsigned()->index();

        });

        //Schema::table('blog_category', function(Blueprint $table)
        //{
        //    $table->foreign('blog_id')->references('id')->on('blog')->onDelete('cascade');
        //    $table->foreign('category_id')->references('id')->on('blog_categories')->onDelete('cascade');           
        //});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       Schema::drop('blog_category');
    }
}
