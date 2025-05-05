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
        Schema::create('client_companies', function (Blueprint $table) {
            $table->id();
            $table->string('company_name');
            $table->string('nip')->unique();
            $table->string('regon')->nullable();
            $table->string('krs')->nullable();
            $table->unsignedBigInteger('client_address_id')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('client_companies');
    }
};
