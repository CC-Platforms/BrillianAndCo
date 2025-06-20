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
        Schema::create('lands', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('price');
            $table->string('location');
            $table->string('area'); // e.g., "400 m²"
            $table->string('category'); // Fast Selling Lands, Developed Lands, etc
            $table->longText('description');
            $table->string('featured_image')->nullable();
            $table->json('gallery_images_json')->nullable();
            $table->string('tag')->nullable(); // Featured, New, Premium, etc
            $table->boolean('is_active')->default(true);
            $table->timestamps();
            
            $table->index('slug');
            $table->index('is_active');
            $table->index('category');
            $table->index('tag');
            $table->index('location');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lands');
    }
};
