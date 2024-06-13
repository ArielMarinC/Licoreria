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
            $table->string('nivel', 35);
            $table->integer('horas');

            $table->unsignedBigInteger('vendedor_id');
            $table->foreign('vendedor_id')->references('id')->on('vendedores');

            $table->unsignedBigInteger('cliente_id');
                $table->unsignedBigInteger('tienda_id');
                
                $table->foreign('cliente_id')->references('id')->on('cliente');
                $table->foreign('tienda_id')->references('id')->on('tiendas');

            $table->timestamps();


        });

        

    }


    public function down(): void
    {
        Schema::dropIfExists('tiendas');
    }
};
