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
        Schema::create('sub_subcription', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->integer('phone')->nullable();
            $table->string('email')->nullable();
            $table->text('content')->nullable();
            $table->unsignedBigInteger('subcription_id');
            $table->timestamps();
            $table->foreign('subcription_id')->references('id')->on('subcription')->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sub_subcription');
    }
};
