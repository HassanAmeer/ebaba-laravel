<?php

// use Illuminate\Database\Migrations\Migration;
// use Illuminate\Database\Schema\Blueprint;
// use Illuminate\Support\Facades\Schema;

// return new class extends Migration
// {
//     /**
//      * Run the migrations.
//      */
//     public function up(): void
//     {
//         Schema::create('variationsF', function (Blueprint $table) {
//             $table->id(); // Add an ID column if it does not exist
//             $table->unsignedBigInteger('products_id');
//             $table->foreign('products_id')->references('id')->on('products')->onDelete('cascade');
//             $table->string('color_code')->default('green')->nullable(); 
//             $table->string('image')->default('ultrapod.png')->nullable(); 
//             $table->decimal('price', 8, 2)->default(5)->nullable(); 
//             $table->timestamps();
//             $table->softDeletes(); // This will add the 'deleted_at' column
//         });
//     }

//     /**
//      * Reverse the migrations.
//      */
//     public function down(): void
//     {
//         Schema::dropIfExists('variationsF');
//     }
// };
