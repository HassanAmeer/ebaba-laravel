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
            $table->string('showProduct')->comment('1')->default(1);
            $table->integer('daysLeft')->comment('5')->default(5);
            $table->string('category')->comment('none')->nullable();
            $table->string('title')->nullable();
            $table->longText('shortDesc')->nullable();
            $table->longText('description')->nullable();
            $table->string('image')->default('https://store-in.puma.com/VendorpageTheme/Enterprise/EThemeForPuma/images/product-not-found.jpg')->nullable();
            $table->string('images')->nullable();
            $table->string('price')->nullable();
            $table->string('designPriceForGridItems')->nullable();
            $table->string('designPriceForDetail')->nullable();
            $table->boolean('showSale')->nullable();
            $table->string('sale')->nullable();
            $table->boolean('showStock')->nullable();
            $table->string('stock')->comment('500')->nullable();
            $table->boolean('showColorVariations')->nullable();
            $table->boolean('showSizeVariations')->nullable();
            $table->string('addVartiaons')->nullable();
            $table->boolean('isSoldOut')->nullable();
            $table->boolean('isfreeAnyItemWithThis')->nullable();
            $table->longText('freeItem')->nullable();
            $table->boolean('showtDaysLeft')->nullable();
            $table->boolean('allowReviews')->nullable();
            $table->timestamps();
            $table->softDeletes();
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
