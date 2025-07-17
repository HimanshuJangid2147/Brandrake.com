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
        Schema::create('call_to_action', function (Blueprint $table) {
            $table->id();
            $table->string('background_image')->nullable();
            $table->string('title')->default('Ready to Start Your Project?');
            $table->text('text')->nullable();
            $table->string('button_text', 50)->default('Get Started');
            $table->string('button_url')->default('#');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('call_to_action');
    }
};
