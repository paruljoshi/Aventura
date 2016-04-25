<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
         Schema::create('reviews', function (Blueprint $table) {
            $table->increments('id');
            $table->string('desc');
            $table->integer('ratings');
            $table->integer('user_id');
            $table->integer('event_id');
            //add user name too
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
        //
        Schema::drop('reviews');
    }
}
