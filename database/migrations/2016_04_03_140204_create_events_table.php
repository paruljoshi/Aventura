<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('events', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('desc');
            $table->string('building');
            $table->string('street');
            $table->string('city');
            $table->string('state');
            $table->string('country');
            $table->date('timings');
            $table->integer('ticket');
            $table->integer('ratings');
            $table->boolean('recommended');
            $table->boolean('reviewed');
            $table->boolean('addedByUser');
            $table->integer('user_id');
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
        Schema::drop('events');
    }
}
