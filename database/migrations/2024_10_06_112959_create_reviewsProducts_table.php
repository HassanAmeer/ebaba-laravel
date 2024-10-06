<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReviewsProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviewsProducts', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('showThis')->comment('show or hide')->nullable();
            $table->integer('products_id')->default('0')->comment('products_id')->nullable();
            $table->integer('userRating')->default('4')->comment('userRating')->nullable();
            $table->string('userName')->default('noman')->comment('userName')->nullable();
            $table->string('userPhoneOrEmail')->default('nomi7@gmail.com')->comment('userEmailOrPhone')->nullable();
            $table->string('userComment')->default('i bought this product by chance its high quality product its amazing to give me more interest')->comment('userComment')->nullable();
            $table->string('userUploadedImage')->comment('review image')->nullable();
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
        Schema::dropIfExists('reviewsProducts');
    }
}
