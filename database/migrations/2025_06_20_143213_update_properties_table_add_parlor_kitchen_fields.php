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
        Schema::table('properties', function (Blueprint $table) {
            // Add new fields
            $table->integer('parlor')->nullable()->after('beds');
            $table->integer('kitchen')->nullable()->after('parlor');
            
            // Rename bathrooms to bathroom
            $table->renameColumn('bathrooms', 'bathroom');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('properties', function (Blueprint $table) {
            // Remove added fields
            $table->dropColumn(['parlor', 'kitchen']);
            
            // Rename bathroom back to bathrooms
            $table->renameColumn('bathroom', 'bathrooms');
        });
    }
};
