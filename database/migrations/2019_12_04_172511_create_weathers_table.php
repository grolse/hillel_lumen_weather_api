<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWeathersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('weathers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('city')->nullable(false);
            $table->float('temperature')->nullable(false);
            $table->integer('temperature_feeling')->nullable(false);
            $table->integer('humidity')->nullable(false);
            $table->integer('pressure')->nullable(false);
            $table->integer('wind_speed')->nullable(false);;
            $table->integer('wind_direction');
            $table->string('precipitation');
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
        Schema::dropIfExists('weathers');
    }
}
