<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BookingDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('BookingDetails', function (Blueprint $table) {
            $table->integer('id');
            $table->integer('packid');
            $table->string('name');
            $table->string('mail');
            $table->string('mob');
            $table->string('no_person');
            $table->string('message');

                    });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('BookingDetails');    }
}
