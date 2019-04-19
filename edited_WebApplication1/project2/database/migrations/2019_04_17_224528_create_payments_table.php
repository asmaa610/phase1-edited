<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('fname');
            $table->string('lname');
            $table->string('troom');
            $table->string('tbed');
            $table->integer('nroom');
            $table->dateTime('cin');
            $table->dateTime('cout');
            $table->double('ttot');
            $table->double('fintot');
            $table->string('mepr');
            $table->string('btot');
            $table->integer('noofdays');

           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payments');
    }
}
