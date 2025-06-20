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
        Schema::create('visitors', function (Blueprint $table) {
            $table->id();
            $table->ipAddress('ip_address');
            $table->string('page_url', 500);
            $table->string('session_id', 100);
            $table->string('user_agent', 500)->nullable();
            $table->string('referrer', 500)->nullable();
            $table->timestamp('visited_at');
            $table->timestamps();

            // Indexes for performance
            $table->index('ip_address');
            $table->index('session_id');
            $table->index('visited_at');
            $table->index(['ip_address', 'visited_at']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('visitors');
    }
};
