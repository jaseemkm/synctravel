<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TourDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tour_details', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->double('price');
            $table->boolean('pack_person');
            $table->string('description');
            $table->string('img');
            $table->string('duration');
        });
            
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tour_details');    }
}
