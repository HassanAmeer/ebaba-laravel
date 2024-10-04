<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSizeVariationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sizeVariations', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('products_id')->comment('products_id')->nullable();
            $table->string('productSize')->default('small')->comment('productSize')->nullable();
            $table->double('productPrice')->default('5000')->comment('productPrice')->nullable();
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
        Schema::dropIfExists('sizeVariations');
    }
}
