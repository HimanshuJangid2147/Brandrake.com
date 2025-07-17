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
        Schema::table('portfolio', function (Blueprint $table) {
            // Drop the old, specific case study columns if they exist
            $table->dropColumn([
                'client_name',
                'client_overview',
                'project_goals',
                'design_concept',
                'brand_system',
                'conclusion',
                'cost',
                'case_study_url',
                'behance_url',
                'background_video',
                'style'
            ]);

            // Add the new, flexible columns
            $table->longText('full_content')->after('description')->nullable();
            $table->json('gallery_images')->after('mockup_image')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('portfolio', function (Blueprint $table) {
            // This is a destructive change, so we'll just define the rollback
            // to add the columns back if needed, though it's unlikely.
            $table->dropColumn(['full_content', 'gallery_images']);

            // Re-add old columns if rolling back
            $table->string('client_name')->nullable();
            $table->text('client_overview')->nullable();
            $table->text('project_goals')->nullable();
            $table->text('design_concept')->nullable();
            $table->text('brand_system')->nullable();
            $table->text('conclusion')->nullable();
            $table->string('cost')->nullable();
            $table->string('case_study_url')->nullable();
            $table->string('behance_url')->nullable();
            $table->string('background_video')->nullable();
            $table->string('style')->nullable();
        });
    }
};
