<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableRecommendedprocessor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('RecommendedProcessors', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('processor_id')->unsigned();
            $table->foreign('processor_id')->references('id')->on('processors');
            $table->integer('motherboard_id')->unsigned();
            $table->foreign('motherboard_id')->references('id')->on('motherboards');
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
        //
    }
}
