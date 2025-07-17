<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * This method adds the new columns required for the detailed case study view
     * to the existing 'portfolio' table.
     */
    public function up(): void
    {
        Schema::table('portfolio', function (Blueprint $table) {
            // Add new columns after the 'description' column for logical order
            $table->string('client_name')->after('description')->nullable();
            $table->text('client_overview')->after('client_name')->nullable();
            $table->text('project_goals')->after('client_overview')->nullable();
            $table->text('design_concept')->after('project_goals')->nullable();
            $table->text('brand_system')->after('design_concept')->nullable();
            $table->text('conclusion')->after('brand_system')->nullable();

            // Make some existing columns nullable if they aren't already,
            // as they might not apply to all case studies.
            $table->string('cost')->nullable()->change();
            $table->string('case_study_url')->nullable()->change();
            $table->string('behance_url')->nullable()->change();
            $table->string('background_video')->nullable()->change();
            $table->string('style')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * This method allows you to roll back the changes by dropping the new columns.
     */
    public function down(): void
    {
        Schema::table('portfolio', function (Blueprint $table) {
            $table->dropColumn([
                'client_name',
                'client_overview',
                'project_goals',
                'design_concept',
                'brand_system',
                'conclusion',
            ]);
        });
    }
};
