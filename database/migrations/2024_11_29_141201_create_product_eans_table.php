<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductEansTable extends Migration
{
    public function up()
    {
        Schema::create('product_eans', function (Blueprint $table) {
            $table->id(); // Automatyczny ID
            $table->string('ean13')->nullable();
            $table->string('ean8')->nullable();
            $table->string('ean128')->nullable();
            $table->string('ean14')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('product_eans');
    }
}
