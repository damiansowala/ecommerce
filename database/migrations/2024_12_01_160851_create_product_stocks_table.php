<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductStocksTable extends Migration
{
    public function up()
    {
        Schema::create('product_stocks', function (Blueprint $table) {
            $table->id();  // id jako klucz główny
            $table->integer('quantity');  // Ilość sztuk
            $table->integer('low_stock'); // Flaga niskiego stanu
            $table->boolean('notifications')->default(false);  // Flaga powiadomień (tak/nie)
            $table->timestamps();  // Daty utworzenia i ostatniej aktualizacji
        });
    }

    public function down()
    {
        Schema::dropIfExists('product_stocks');
    }
}
