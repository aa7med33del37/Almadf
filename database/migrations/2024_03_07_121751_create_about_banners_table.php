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
        Schema::create('about_banners', function (Blueprint $table) {
            $table->id();
            $table->string('subTitle', 100)->nullable();
            $table->string('title', 255)->required();
            $table->string('description', 255)->nullable();

            $table->string('text1', 255)->nullable();
            $table->string('text2', 255)->nullable();
            $table->string('text3', 255)->nullable();
            $table->string('youtube', 255)->nullable();

            $table->string('image1', 255)->required();
            $table->string('image2', 255)->required();

            $table->string('button_text', 100)->required();
            $table->string('button_link', 100)->required();

            $table->string('background', 100)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('about_banners');
    }
};
