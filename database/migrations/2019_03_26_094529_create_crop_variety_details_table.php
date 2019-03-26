<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCropVarietyDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('crop_variety_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('crop_variety_id')->unsigned();
            $table->float('min_ph', 3, 2);
            $table->float('max_ph', 3, 2);
            $table->string('climate');
            $table->string('fertilizers')->nullable();
            $table->string('pesticides')->nullable();
            $table->text('cultivation')->nullable();
            $table->text('details')->nullable();
            $table->foreign('crop_variety_id')->references('id')->on('crop_varieties')->onDelete('cascade');
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
        Schema::dropIfExists('crop_variety_details');
    }
}
