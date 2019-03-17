<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGrantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grants', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');   
            $table->date('need_date');
            $table->string('title');
            $table->string('body');
            $table->decimal('amount', 5,2);
            $table->boolean('is_member');
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
        Schema::drop('grants');
    }
}
