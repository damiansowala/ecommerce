<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('shipping_methods', function (Blueprint $table) {
            $table->id();

            // Nazwa metody dostawy
            $table->string('name')->unique(); // np. "Kurier", "Paczkomat", "Odbiór osobisty"

            // Kod lub alias
            $table->string('code')->unique()->nullable(); // np. "courier", "locker", "pickup"

            // Opis metody dostawy
            $table->text('description')->nullable(); // np. "Dostawa w 1-2 dni robocze"

            // Koszt dostawy
            $table->decimal('price', 10, 2)->default(0); // np. 15.99 zł

            // Minimalna kwota zamówienia dla darmowej dostawy
            $table->decimal('free_shipping_threshold', 10, 2)->nullable(); // np. darmowa dostawa od 200 zł

            // Czy metoda jest aktywna
            $table->boolean('is_active')->default(true);

            // Kolejność wyświetlania
            $table->integer('sort_order')->default(0);

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('shipping_methods');
    }
};
