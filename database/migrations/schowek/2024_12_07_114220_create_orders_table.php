<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();

            // Dane klienta
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email');
            $table->string('phone');

            // Adres dostawy
            $table->string('address_line_1');
            $table->string('address_line_2')->nullable();
            $table->string('city');
            $table->string('state')->nullable();
            $table->string('postal_code');
            $table->string('country');

            // Informacje o zamówieniu
            $table->string('order_number')->unique();
            $table->dateTime('order_date');
            $table->string('status')->default('pending'); // oczekujące, w realizacji, zakończone, anulowane
            $table->string('payment_status')->default('unpaid'); // nieopłacone, opłacone, zwrócone
            $table->decimal('total_amount', 10, 2);
            $table->string('currency')->default('PLN');

            // Metoda płatności
            $table->string('payment_method')->nullable();
            $table->string('payment_reference')->nullable();

            // Metoda dostawy
            $table->string('shipping_method')->nullable();
            $table->decimal('shipping_cost', 10, 2)->default(0);

            // Uwagi i zgody
            $table->text('customer_note')->nullable();
            $table->boolean('terms_accepted')->default(false);

            // Opcjonalne pola
            $table->string('discount_code')->nullable();
            $table->decimal('discount_amount', 10, 2)->default(0);
            $table->decimal('tax_amount', 10, 2)->default(0);




            $table->foreignId('user_id')->nullable()->constrained()->onDelete('set null'); // Zalogowany użytkownik (jeśli dotyczy)

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
