<?php


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUniquePizzaSizeTable extends Migration

{
    public function up()
    {
        Schema::create('pizza_sizes', function (Blueprint $table) {
            $table->id();
            // Define otras columnas aquí
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pizza_sizes');
    }
}

