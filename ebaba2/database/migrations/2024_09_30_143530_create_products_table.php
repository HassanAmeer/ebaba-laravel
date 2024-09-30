<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('category')->default('all')->nullable();
            $table->string('title')->default('name')->nullable();
            $table->string('short desc')->default('short desc')->nullable();
            $table->string('description')->default('description')->nullable();
            $table->string('image')->default('https://store-in.puma.com/VendorpageTheme/Enterprise/EThemeForPuma/images/product-not-found.jpg')->nullable();
            $table->string('images')->nullable();
            $table->string('price area')->nullable();
            $table->boolean('show sale')->nullable();
            $table->string('sale design')->nullable();
            $table->boolean('show stock')->comment('500')->nullable();
            $table->string('stock design area')->nullable();
            $table->boolean('show variations')->nullable();
            $table->string('add vartiaons')->nullable();
            $table->boolean('isSoldOut')->nullable();
            $table->boolean('isfreeAnyItemWithThis')->nullable();
            $table->string('free item design')->nullable();
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
        Schema::dropIfExists('products');
    }
}
