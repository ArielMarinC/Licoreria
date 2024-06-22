<?php

namespace App\Repositories;

Use App\Http\Models\Vendedor;
use Illuminate\Http\Request;
use app\Repositories\VendedorRepository;

class VendedorRepository{

    public function getVendedoresTienda()
    {
        $vendedores = $this->reportVendedor->getVendedorTienda();
    //    $vendedores = Vendedor::select('id', 'nombre_apellido', 'profesion', 'grado_academico', 'telefono')->orderBy('id', 'ASC')->limit(10)->get();
        return $vendedores;
    }
    
    public function getVendedores(){
        $vendedores = Vendedor::all();
        return $vendedores;
    }

    public function validateVendedores(Request $request){

        return $request->validate([
            'fnombre_apellido' => 'required|min:3|max:75',
            'profesion' => 'required',
            'grado_academico' => 'required',
            'telefono' => 'required|numeric',
        ]);
    }


}