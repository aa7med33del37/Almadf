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
        Schema::create('workers', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100)->required();
            $table->integer('age')->required();
            $table->string('country')->required()->default('Worker');
            $table->enum('religion', ['Muslim', 'Christian'])->nullable()->default('Muslim');
            $table->integer('experience')->required()->default('1');
            $table->mediumText('description')->required();
            $table->longText('long_description')->required();
            $table->enum('rating', ['1', '2', '3', '4', '5'])->default('5');
            $table->string('cv', 100)->required();
            $table->string('image', 255)->required();
            $table->enum('status', ['0', '1'])->default('1');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('workers');
    }
};
