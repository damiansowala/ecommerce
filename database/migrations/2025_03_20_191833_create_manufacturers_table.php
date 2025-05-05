<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('manufacturers', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Nazwa firmy producenta
            $table->string('street'); // Ulica i numer
            $table->string('postal_code'); // Kod pocztowy
            $table->string('city'); // Miasto
            $table->char('nip', 10); // NIP (zawsze 10 znaków)
            $table->char('krs', 10)->nullable();;
            $table->char('regon', 9)->nullable(); // REGON (najczęściej 9 znaków, ale może mieć 14)
            $table->string('code')->unique(); // Kod producenta (może zawierać litery i cyfry)
            $table->string('contact_person')->nullable(); // Osoba kontaktowa
            $table->string('phone')->nullable(); // Numer telefonu
            $table->string('email')->nullable(); // Email
            $table->boolean('status')->default(true);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('manufacturers');
    }
};
