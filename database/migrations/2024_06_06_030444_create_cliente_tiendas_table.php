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
       Schema::create('cliente_tiendas', function (Blueprint $table) {
            $table->id();


            $table->unsignedBigInteger('cliente_id');
                $table->unsignedBigInteger('tienda_id');
                
                $table->foreign('cliente_id')->references('id')->on('cliente');
                $table->foreign('tienda_id')->references('id')->on('tiendas');
                



            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cliente_tiendas');
    }
};
