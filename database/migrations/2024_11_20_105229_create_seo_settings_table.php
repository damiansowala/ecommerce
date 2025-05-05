<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeoSettingsTable extends Migration
{
    /**
     * Uruchom migrację.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings_seo', function (Blueprint $table) {
            $table->id();
            $table->string('meta_title')->nullable(); // Tytuł SEO
            $table->string('meta_description')->nullable(); // Opis SEO
            $table->text('meta_keywords')->nullable(); // Słowa kluczowe SEO
            $table->string('canonical_url')->nullable(); // URL kanoniczny
            $table->string('robots')->nullable()->default('index, follow'); // Opcje robotów
            $table->string('og_title')->nullable(); // Open Graph tytuł
            $table->string('og_description')->nullable(); // Open Graph opis
            $table->string('og_image')->nullable(); // Open Graph obrazek
            $table->timestamps(); // Daty utworzenia i aktualizacji
        });
    }

    /**
     * Cofnij migrację.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('settings_seo');
    }
}
