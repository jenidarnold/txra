<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNominationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nominations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('type_id');         /* i.e. 2017 Annual Awards */
            $table->integer('category_id');     /* i.e. Male Athlete of the Year */

            $table->integer('proposer_user_id');            
            $table->string('proposer_first_name');
            $table->string('proposer_last_name');
            $table->string('proposer_email');
            $table->string('proposer_phone');
            $table->boolean('proposer_is_member')->default(0);

            $table->string('nominee_first_name');
            $table->string('nominee_last_name');

            $table->string('comments');
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
        Schema::drop('nominations');
    }
}
