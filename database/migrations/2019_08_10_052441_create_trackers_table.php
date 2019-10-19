<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrackersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trackers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('trackId');
            $table->dateTime('datetime');
            $table->double('Temperature');
            $table->double('Light');
            $table->double('RHexposure');
            $table->double('illumination');
            $table->string('Geolocation');
            $table->double('Longtitude');
            $table->double('Latitude');
            $table->integer('Battery');
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
        Schema::dropIfExists('trackers');
    }
}
