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
        Schema::table('facilities', function (Blueprint $table) {
            // Drop unnecessary columns
            $table->dropColumn(['subtitle', 'description', 'features_list_json']);
            
            // Add image column
            $table->string('image')->nullable()->after('title');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('facilities', function (Blueprint $table) {
            // Drop image column
            $table->dropColumn('image');
            
            // Add back the removed columns
            $table->string('subtitle')->nullable()->after('title');
            $table->longText('description')->after('subtitle');
            $table->json('features_list_json')->nullable()->after('description');
        });
    }
};
