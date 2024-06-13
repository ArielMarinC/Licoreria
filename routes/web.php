<?php

use Illuminate\Support\Facades\Route;
use App\Models\vendedor;
use App\Models\cliente;
use App\Models\tienda;

Route::get('/', function () {
    $vendedores = vendedor::find(2);

    return view('welcome', ['vendedores' => $vendedores->nombre_apellido]);
});
