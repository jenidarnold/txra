<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('gender');

            $table->string('cell_phone');
            $table->string('home_phone');
            $table->string('address');
            $table->mediumInteger('zipcode');
            $table->string('city');
            $table->string('state');

            $table->string('racquet');
            $table->string('skill');
            $table->string('dominant_hand');

            $table->text('bio');

            $table->string('facebook');
            $table->string('twitter');
            $table->string('linkedin');
            $table->string('googleplus');
            $table->string('instagram');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('user_profiles');
    }
}
