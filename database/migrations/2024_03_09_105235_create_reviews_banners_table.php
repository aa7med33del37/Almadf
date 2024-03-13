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
        Schema::create('reviews_banners', function (Blueprint $table) {
            $table->id();
            $table->string('subTitle', 100)->nullable();
            $table->string('title', 255)->required();
            $table->string('image', 255)->required();

            $table->string('client1', 100)->required();
            $table->string('job1', 100)->required();
            $table->string('message1', 100)->required();
            $table->string('rating1', 100)->required();

            $table->string('client2', 100)->required();
            $table->string('job2', 100)->required();
            $table->string('message2', 100)->required();
            $table->string('rating2', 100)->required();

            $table->string('client3', 100)->required();
            $table->string('job3', 100)->required();
            $table->string('message3', 100)->required();
            $table->string('rating3', 100)->required();

            $table->string('background', 100)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reviews_banners');
    }
};
