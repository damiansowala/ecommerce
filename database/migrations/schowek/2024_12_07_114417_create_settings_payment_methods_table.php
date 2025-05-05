<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('payment_methods', function (Blueprint $table) {
            $table->id();

            // Nazwa metody płatności
            $table->string('name')->unique(); // np. "Karta płatnicza", "Przelew", "PayPal"

            // Alias lub kod dla systemów płatności
            $table->string('code')->unique()->nullable(); // np. "credit_card", "paypal", "bank_transfer"

            // Opis metody płatności
            $table->text('description')->nullable(); // np. "Zapłać kartą Visa, MasterCard lub American Express"

            // Dostępność metody
            $table->boolean('is_active')->default(true); // Aktywne/nieaktywne

            // Dodatkowe opłaty
            $table->decimal('transaction_fee', 10, 2)->default(0); // Opcjonalna opłata za metodę płatności

            // Kolejność wyświetlania
            $table->integer('sort_order')->default(0);

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('payment_methods');
    }
};
