<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactUsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contactUs', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('isReadOut')->nullable();
            $table->string('name')->comment('User Name')->nullable();
            $table->string('phone')->default('+92')->comment('Phone Number')->nullable();
            $table->string('image')->comment('Sample')->nullable();
            $table->longText('description')->comment('Write Something')->nullable();
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
        Schema::dropIfExists('contactUs');
    }
}
