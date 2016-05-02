<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('reports', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');            
            $table->integer('event_id');
            $table->longText('description');
            $table->longText('reason');
            $table->string('status'); //reviewing & reviewed
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
        Schema::drop('reports');
    }
}
