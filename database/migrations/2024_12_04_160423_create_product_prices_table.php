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
        Schema::create('product_prices', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('product_id');
            $table->enum('price_type', ['retail', 'wholesale', 'online']);
            $table->decimal('net_price', 10, 2);
            $table->decimal('gross_price', 10, 2);
            $table->decimal('margin', 5, 2);
            $table->integer('min_purchase');
            $table->unsignedBigInteger('sales_method_id');
            $table->timestamps();

            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
            $table->foreign('sales_method_id')->references('id')->on('settings_sales_method')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_prices');
    }
};
