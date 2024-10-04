<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateColorsVariationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    { 

        // make sure productId attach as a reference for hasMany method -> with products table freign key with colum name is id from mysql database
        // or changing from in this file then migrate
        Schema::create('ColorsVariations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('products_id')->comment('productId')->nullable();
            $table->string('productColorCode')->default('green')->comment('productColorCode')->nullable();
            $table->string('productImage')->comment('productImage')->nullable();
            $table->double('productPrice')->default('50000')->comment('productPrice')->nullable();
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
        Schema::dropIfExists('ColorsVariations');
    }
}
