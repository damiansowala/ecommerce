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
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('phone');
            $table->string('email')->unique();
            $table->unsignedBigInteger('address_id')->nullable();
            $table->unsignedBigInteger('company_id')->nullable();
            $table->unsignedBigInteger('client_group_id')->nullable();
            $table->unsignedBigInteger('client_caretaker_id')->nullable();
            $table->boolean('verified')->default(false); // Weryfikacja
            $table->enum('client_kind', ['individual', 'company']); // Rodzaj klienta: osoba fizyczna / firma
            $table->enum('client_type', ['online', 'retail', 'wholesale']); // Typ klienta: online / detaliczny / hurtowy
            $table->boolean('status')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
