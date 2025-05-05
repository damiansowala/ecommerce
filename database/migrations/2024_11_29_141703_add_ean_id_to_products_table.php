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
        Schema::table('products', function (Blueprint $table) {
            $table->foreign('ean_id')
                ->references('id')->on('product_eans')
                ->onDelete('set null'); // Ustawienie ean_id na NULL, jeśli powiązany rekord w product_eans zostanie usunięty

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropForeign(['ean_id']);
        });
    }
};
