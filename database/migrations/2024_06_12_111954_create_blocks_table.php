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
        Schema::create('blocks', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('title1')->nullable();
            $table->string('title2')->nullable();
            $table->string('title3')->nullable();
            $table->string('title4')->nullable();
            $table->string('title5')->nullable();
            $table->string('description')->nullable();
            $table->string('description1')->nullable();
            $table->string('description2')->nullable();
            $table->string('description3')->nullable();
            $table->string('description4')->nullable();
            $table->string('description5')->nullable();
            $table->string('images')->nullable();
            $table->string('images1')->nullable();
            $table->string('images2')->nullable();
            $table->string('images3')->nullable();
            $table->string('images4')->nullable();
            $table->string('images5')->nullable();
            $table->string('content')->nullable();
            $table->string('content1')->nullable();
            $table->string('content2')->nullable();
            $table->string('content3')->nullable();
            $table->string('content4')->nullable();
            $table->string('content5')->nullable();
            $table->string('link')->nullable();
            $table->string('link1')->nullable();
            $table->string('link2')->nullable();
            $table->string('link3')->nullable();
            $table->string('link4')->nullable();
            $table->string('link5')->nullable();
            $table->json('json')->nullable();
            $table->json('json1')->nullable();
            $table->json('json2')->nullable();
            $table->json('json3')->nullable();
            $table->json('json4')->nullable();
            $table->json('json5')->nullable();
            $table->unsignedBigInteger('landingpage_id');
            $table->timestamps();
            $table->foreign('landingpage_id')->references('id')->on('landingpages')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blocks');
    }
};
