<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagesDesignTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('PagesDesign', function (Blueprint $table) {
            $table->increments('id');
            $table->longText('privacyPolicy')->comment('privacyPolicy')->nullable();
            $table->longText('shippingPolicy')->comment('returnPolicy')->nullable();
            $table->longText('returnRefundPolicy')->comment('returnRefundPolicy')->nullable();
            $table->longText('termsCondition')->comment('termsCondition')->nullable();
            $table->longText('contactUs')->comment('contactUs')->nullable();
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
        Schema::dropIfExists('PagesDesign');
    }
}
