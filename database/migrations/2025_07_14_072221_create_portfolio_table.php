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
        Schema::create('portfolio', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->string('cost', 100);
            $table->string('case_study_url')->nullable()->default('#');
            $table->string('behance_url')->nullable()->default('#');
            $table->string('mockup_image');
            $table->string('background_video')->nullable();
            $table->string('style', 20)->default('dark');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('portfolio');
    }
};
