<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductcatgTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productcatg', function (Blueprint $table) {
            $table->increments('id');
            $table->string('image')->default('https://www.shutterstock.com/image-vector/labels-price-tags-keywords-coupons-600nw-2204767035.jpg')->nullable();
            $table->string('name')->unique()->default('all')->nullable();
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
        Schema::dropIfExists('productcatg');
    }
}
