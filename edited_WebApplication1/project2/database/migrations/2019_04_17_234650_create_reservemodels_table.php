<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservemodelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservemodels', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Title');
            $table->char('FName');
            $table->char('LName');
            $table->string('Email');
            $table->string('National');
            $table->string('Country');
            $table->integer('Phone');
            $table->string('TRoom');
            $table->string('Bed');
            $table->integer('NRoom');
            $table->string('Meal');
            $table->dateTime('cin');
            $table->dateTime('cout');
            $table->string('stat');
            $table->integer('nodays');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservemodels');
    }
}
