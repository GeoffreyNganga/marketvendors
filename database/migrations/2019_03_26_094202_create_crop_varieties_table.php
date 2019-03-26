<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCropVarietiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('crop_varieties', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('crop_id')->unsigned();
            $table->string('code');
            $table->string('name');
            $table->string('image')->nullable();
            $table->string('description')->nullable();
            $table->foreign('crop_id')->references('id')->on('crops')->onDelete('cascade');
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
        Schema::dropIfExists('crop_varieties');
    }
}
