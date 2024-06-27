<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('infimations', function (Blueprint $table) {
            $table->id();
            $table->string('meta')->nullable();
            $table->string('title')->nullable();
            $table->string('description')->nullable();
            $table->json('json1')->nullable();
            $table->string('image')->nullable();
            $table->string('link')->nullable();


            $table->string('meta2')->nullable();
            $table->string('title2')->nullable();
            $table->string('description2')->nullable();
            $table->json('json2')->nullable();
            
            $table->string('title3')->nullable();
            $table->json('json3')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('infimations');
    }
};
