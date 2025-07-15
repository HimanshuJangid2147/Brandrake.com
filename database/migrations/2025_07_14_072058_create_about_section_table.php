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
            $table->text('section_subtitle');
            $table->string('title');
            $table->text('subtitle');
            $table->text('list_item_1');
            $table->text('list_item_2');
            $table->text('list_item_3');
            $table->string('image_url');
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
