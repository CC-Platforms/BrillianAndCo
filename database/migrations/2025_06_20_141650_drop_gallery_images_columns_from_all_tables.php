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
        // Drop gallery_images_json column from properties table
        Schema::table('properties', function (Blueprint $table) {
            $table->dropColumn('gallery_images_json');
        });

        // Drop gallery_images_json column from lands table
        Schema::table('lands', function (Blueprint $table) {
            $table->dropColumn('gallery_images_json');
        });

        // Drop gallery_images_json column from facilities table
        Schema::table('facilities', function (Blueprint $table) {
            $table->dropColumn('gallery_images_json');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Add back gallery_images_json column to properties table
        Schema::table('properties', function (Blueprint $table) {
            $table->json('gallery_images_json')->nullable();
        });

        // Add back gallery_images_json column to lands table
        Schema::table('lands', function (Blueprint $table) {
            $table->json('gallery_images_json')->nullable();
        });

        // Add back gallery_images_json column to facilities table
        Schema::table('facilities', function (Blueprint $table) {
            $table->json('gallery_images_json')->nullable();
        });
    }
};
