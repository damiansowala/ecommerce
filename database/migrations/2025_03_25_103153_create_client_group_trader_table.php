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
        Schema::create('client_group_trader', function (Blueprint $table) {
            $table->id();
            $table->foreignId('client_group_id')->constrained()->onDelete('cascade');
            $table->foreignId('trader_id')->constrained()->onDelete('cascade');
            $table->timestamps();

            // Indeksy, jeśli są potrzebne
            $table->unique(['client_group_id', 'trader_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('client_group_trader');
    }
};
