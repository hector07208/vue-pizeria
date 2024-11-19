<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderExtraIngredientTable extends Migration
{
    public function up()
    {
        Schema::create('order_extra_ingredient', function (Blueprint $table) {
            $table->id();
            $table->foreignId('order_id')->constrained(); // Verifica que la tabla de orders exista
            $table->foreignId('ingredient_id')->constrained(); // Asegúrate de que la tabla de ingredients exista
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('order_extra_ingredient');
    }
}
