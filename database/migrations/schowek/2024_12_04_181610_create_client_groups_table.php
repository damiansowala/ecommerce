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
        Schema::create('client_groups', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->decimal('discount_amount', 10, 2)->nullable();
            $table->integer('discount_quantity')->nullable();
            $table->decimal('discount_percentage', 5, 2)->nullable();
            $table->boolean('free_shipping')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('client_groups');
    }
};
