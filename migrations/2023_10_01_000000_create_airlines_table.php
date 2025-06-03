<?php

use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Database\Schema\Blueprint;

if (!Capsule::schema()->hasTable('airlines')) {
    Capsule::schema()->create('airlines', function (Blueprint $table) {
        $table->increments('AirlineID')->unique();
        $table->string('AirlineName');
        $table->string('code');
        $table->date('AirlineFromDate');
        $table->date('AirlineToDate');
        $table->integer('RenamedToAirlineID');
        $table->timestamps();
    });
}
