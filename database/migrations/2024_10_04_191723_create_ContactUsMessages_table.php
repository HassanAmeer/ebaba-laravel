<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactUsMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ContactUsMessages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->default('Need Help')->comment('title')->nullable();
            $table->string('name')->comment('name')->nullable();
            $table->string('phone')->default('+92 30')->comment('phone number')->nullable();
            $table->string('image')->comment('image')->nullable();
            $table->string('description')->comment('description')->nullable();
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
        Schema::dropIfExists('ContactUsMessages');
    }
}
