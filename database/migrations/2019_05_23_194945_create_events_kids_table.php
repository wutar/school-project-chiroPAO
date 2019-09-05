<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsKidsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events_kids', function (Blueprint $table) {
            $table->bigInteger('event_id')->unsigned()->nullable();
            $table->bigInteger('kid_id')->unsigned()->nullable(); 
            $table->foreign('event_id')->references('id')->on('events')->onDelete('cascade');
            $table->foreign('kid_id')->references('id')->on('kids')->onDelete('cascade');
        }); 
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events_kids');
    }
}
