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
        Schema::create('worker_images', function (Blueprint $table) {
            $table->id();
            $table->unSignedBigInteger('worker_id');
            $table->string('image', 255)->required();
            $table->foreign('worker_id')->references('id')->on('workers')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('worker_images');
    }
};
