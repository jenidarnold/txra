<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRefereesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('referees', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('usar_id');
            $table->string('first_name');
            $table->string('last_name');            
            $table->integer('level');
            $table->date('date_certified');
            $table->date('valid_until');
            $table->string('city');
            $table->string('state');
            $table->string('phone');
            $table->string('email');
            $table->string('facebook');
            $table->string('quote');
            $table->string('blurb');
            $table->string('logo');
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
        Schema::drop('referees');
    }
}
