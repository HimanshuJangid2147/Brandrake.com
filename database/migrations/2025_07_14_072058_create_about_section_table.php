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
        Schema::create('about_section', function (Blueprint $table) {
            $table->id();
            $table->string('section_title', 100)->default('About');
            $table->text('section_subtitle')->nullable();
            $table->string('title')->default('Who We Are');
            $table->text('subtitle')->nullable();
            $table->text('list_item_1')->nullable();
            $table->text('list_item_2')->nullable();
            $table->text('list_item_3')->nullable();
            $table->string('image_url')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('about_section');
    }
};
