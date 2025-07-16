<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('site_settings', function (Blueprint $table) {
            $table->id();
            $table->string('store_name', 100)->nullable();
            $table->string('store_email', 100)->nullable();
            $table->string('store_phone', 50)->nullable();
            $table->string('app_link')->nullable();
            $table->text('store_address')->nullable();
            $table->string('store_logo')->nullable();
            $table->string('facebook_link')->nullable();
            $table->string('twitter_link')->nullable();
            $table->string('instagram_link')->nullable();
            $table->string('youtube_link')->nullable();
            $table->boolean('is_maintenance_mode')->default(false);
            $table->text('maintenance_message')->nullable();
            $table->string('notification_text')->nullable();
            $table->string('herosection_title')->nullable();
            $table->string('herosection_text')->nullable();
            $table->text('herosection_description')->nullable();
            $table->string('logo_url')->nullable();
            $table->string('favicon_url')->nullable();
            $table->string('footer_copyright')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('site_settings');
    }
};
