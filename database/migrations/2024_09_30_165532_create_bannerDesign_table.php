<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBannerDesignTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bannerDesign', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->nullable();
            $table->string('bigAreaBgImage')->nullable();
            $table->string('smallAreaBgImage')->nullable();
            $table->longText('bigAreaDesign')->nullable();
            $table->longText('smallAreaDesign')->nullable();
            $table->longText('showBgImageInBigArea')->nullable();
            $table->longText('showBgImageInSmallArea')->nullable();
            $table->longText('showContentInBigArea')->nullable();
            $table->longText('showContentInSmallArea')->nullable();
            
            $grid->column('', __(''));
            $table->integer('duraion')->nullable();
            $table->longText('showInSlide')->nullable();
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
        Schema::dropIfExists('bannerDesign');
    }
}
