<?php


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderPizzaTable extends Migration
{
    public function up()
    {
        Schema::create('order_pizza', function (Blueprint $table) {
            $table->id();
            $table->foreignId('order_id')->constrained(); 
            $table->foreignId('pizza_size_id')->constrained(); 
            $table->integer('quantity');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('order_pizza');
    }
}

