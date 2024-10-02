<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTopSlideTextTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('topSlideText', function (Blueprint $table) {
            $table->increments('id');
            $table->string('showMessage')->default('Welcome')->comment('showMessage')->nullable();
            $table->integer('duration')->nullable();
            $table->boolean('showInSlider')->nullable();
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
        Schema::dropIfExists('topSlideText');
    }
}
