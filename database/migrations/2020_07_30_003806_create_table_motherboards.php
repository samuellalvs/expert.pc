<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableMotherboards extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('MotherBoards', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('socket');
            $table->string('form_factor');
            $table->integer('memory_max');
            $table->integer('memory_slots');
            $table->integer('score')->nullable();
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
        Schema::dropIfExists('MotherBoard');
    }
}
