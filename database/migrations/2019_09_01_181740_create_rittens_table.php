<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRittensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rittens', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('inwoner_id')->unsigned();
            $table->integer('taxi_id')->unsigned();

            $table->timestamps();
            $table->foreign('inwoner_id')->references('id')->on('inwoners')->onDelete('cascade');
            $table->foreign('taxi_id')->references('id')->on('taxis')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rittens');
    }
}
