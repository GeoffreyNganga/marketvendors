<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FarmProduce extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('farm_produce', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('farmer_id')->unsigned();
            $table->integer('crop_id')->unsigned();
            $table->string('unit_of_sale');
            $table->decimal('price_per_unit', 8, 2);
            $table->float('units_available', 8, 2);
            $table->string('image')->nullable();
            $table->string('location')->nullable();
            $table->foreign('farmer_id')->references('id')->on('farmers')->onDelete('cascade');
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
        Schema::dropIfExists('farm_produce');
    }
}
