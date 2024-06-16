<?php

namespace App\Repositories;
use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteRepository
{
    public function obtenerLosClientesRegistradosEnUnaTienda(){
        $clientes = Cliente::has('tiendas')->get();
        return $clientes;
    }
}