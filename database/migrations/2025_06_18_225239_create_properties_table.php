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
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('price');
            $table->string('period')->nullable(); // Month/Year/etc
            $table->string('location');
            $table->integer('beds')->nullable();
            $table->integer('bathrooms')->nullable();
            $table->longText('description');
            $table->string('featured_image')->nullable();
            $table->json('gallery_images_json')->nullable();
            $table->string('tag')->nullable(); // New, Featured, Premium, etc
            $table->boolean('is_featured')->default(false);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
            
            $table->index('slug');
            $table->index('is_featured');
            $table->index('is_active');
            $table->index('tag');
            $table->index('location');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};
