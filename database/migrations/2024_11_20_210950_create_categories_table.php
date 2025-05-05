<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('product_categories', function (Blueprint $table) {
            $table->id();
            $table->string('cat_name');
            $table->text('description')->nullable(); // Pole opis kategorii
            $table->foreignId('parent_id')->nullable()->constrained('product_categories')->cascadeOnDelete();
            $table->foreignId('setting_seo_id')->nullable()->constrained('settings_seo')->onDelete('set null');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('product_categories');
    }
};
