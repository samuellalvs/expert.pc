<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableGraphicscards extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('GraphicsCards', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('memory_size')->nullable();
            $table->string('memory_type')->nullable();
            $table->integer('tdp')->nullable();
            $table->integer('psu')->nullable();
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
        Schema::dropIfExists('VideoCard');
    }
}
