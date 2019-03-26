<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CropFarmers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('crop_farmers', function (Blueprint $table) {
            $table->integer('crop_id')->unsigned();
            $table->integer('farmer_id')->unsigned();
            $table->foreign('crop_id')->references('id')->on('crops')->onDelete('cascade');
            $table->foreign('farmer_id')->references('id')->on('farmers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('crop_farmers');
    }
}
