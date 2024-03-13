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
        Schema::create('funfacts', function (Blueprint $table) {
            $table->id();
            $table->integer('years')->default(15);
            $table->longText('years_desc')->nullable()->default('لدينا أكثر من 15+ سنوات من الخبرة العملية.');
            $table->integer('clients')->default(160);
            $table->longText('clients_desc')->nullable()->default('لدينا أكثر من 160 موظفًا يعملون بالقرب منك.');
            $table->integer('projects')->default(20);
            $table->longText('projects_desc')->nullable()->default('لدينا أكثر من 20 مشروعًا ناجحًا تم تسليمها.');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('funfacts');
    }
};
