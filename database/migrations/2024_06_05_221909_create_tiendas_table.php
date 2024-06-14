<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('tiendas', function (Blueprint $table) {
            $table->id();
            $table->string('sucursal', 75);
            $table->string('zona', 35)->nullable();
            $table->string('horas_venta');
            $table->unsignedBigInteger('vendedor_id');
            $table->foreign('vendedor_id')->references('id')->on('vendedores')->onDelete('cascade');
            $table->timestamps();

        });

        Schema::create('cliente_tienda', function(Blueprint $table){
            $table->increments('id');
            $table->unsignedBigInteger('cliente_id');
            $table->foreign('cliente_id')->references('id')->on('cliente')->onDelete('cascade');
            $table->unsignedBigInteger('tienda_id');
            $table->foreign('tienda_id')->references('id')->on('tiendas')->onDelete('cascade');


        });

        

    }


    public function down(): void
    {
        Schema::dropIfExists('tiendas');
    }
};
