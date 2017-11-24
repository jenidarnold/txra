<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePromoAcceptsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('promo_accepts', function (Blueprint $table) {
            $table->integer('promo_id');
            $table->integer('user_accept_id');
            $table->integer('user_referrer_id')->nullable();
            $table->timestamp('accepted_at')->nullable();
            $table->tinyInteger('accept_method_id');
            $table->timestamps();

            //$table->foreign('user_accept_id')->references('id')->on('users');
            //$table->foreign('user_referrer_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('promo_accepts');
    }
}
