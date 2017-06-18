<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClubsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clubs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name'); 
            $table->string('address');  
            $table->string('city'); 
            $table->string('state'); 
            $table->string('zip');              
            $table->string('phone');
            $table->float('lat', 10, 6);  
            $table->float('lng', 10, 6);  
            $table->string('type'); 
            $table->integer('courts');   
            $table->string('info');  
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
        Schema::drop('clubs');
    }
}
