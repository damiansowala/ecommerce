<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductParamsTable extends Migration
{
    public function up()
    {
        Schema::create('product_params', function (Blueprint $table) {
            $table->id();
            $table->decimal('weight', 8, 2);
            $table->decimal('width', 8, 2);
            $table->decimal('height', 8, 2);
            $table->decimal('length', 8, 2);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('product_params');
    }
}
