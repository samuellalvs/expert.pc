<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableProcessors extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Processors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('core');
            $table->integer('thread');
            $table->string('socket');
            $table->string('clock');
            $table->integer('tdp');
            $table->string('released');
            $table->string('video');
            $table->integer('score')->nullable();
            $table->integer('price')->nullable();
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
        Schema::dropIfExists('Processors');
    }
}
