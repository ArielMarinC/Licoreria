<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vendedor;

class VendedorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vendedores = Vendedor::all();
        return view('vendedores.index', ['vendedores' => $vendedores]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('vendedores.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre_apellido' => 'required|max:75',
            'profesion' => 'required|max:35',
        ]);

        $vendedor = new Vendedor($request->all());
        $vendedor->save();
        return redirect()->action([VendedorController::class, 'index']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $vendedor = Vendedor::find($id);
        return view('vendedores.show', ['vendedores' => $vendedor]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $vendedor = Vendedor::findOrFail($id);
        return view('vendedores.edit', ['vendedor' => $vendedor]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nombre_apellido' => 'required|max:75',
            'profesion' => 'required|max:35',
        ]);
        $vendedor = Vendedor::findOrFail($id);
        $vendedor->nombre_apellido = $request->nombre_apellido;
        $vendedor->profesion = $request->profesion;
        $vendedor->grado_academico = $request->grado_academico;
        $vendedor->telefono = $request->telefono;
        $vendedor->save();
        return redirect()->action([VendedorController::class, 'index']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
