<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Orders', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('deliverd')->nullable();
            $table->boolean('isRejected')->nullable();
            $table->string('userName')->nullable();
            $table->string('userPhone')->nullable();
            $table->string('UserAddress')->nullable();
            $table->string('productTitle')->nullable();
            $table->string('productImage')->nullable();
            $table->integer('productQuantity')->nullable();
            $table->double('productPrice')->nullable();
            $table->string('sizeVariations')->nullable();
            $table->string('colorVariations')->nullable();
            $table->ipAddress('ipAddress')->nullable();
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
        Schema::dropIfExists('Orders');
    }
}
