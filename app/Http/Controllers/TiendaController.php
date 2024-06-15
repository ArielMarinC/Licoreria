<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tienda;
use App\Models\Cliente;
use App\Models\Vendedor;

class TiendaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tiendas = Tienda::all();
        return view('tiendas.index', ['tiendas' => $tiendas]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $vendedores = Vendedor::all();
        $clientes = Cliente::all();
        return view('tiendas.create', ['vendedores' => $vendedores, 'clientes' => $clientes]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'sucursal' => 'required|max:75',
            'zona' => 'required|max:35',
            'vendedor_id' => 'required|integer',
            'cliente_ids' => 'required|array',
        ]);
        $tienda = new Tienda($request->all());
        $tienda->save();
        foreach ($request->cliente_ids as $cliente_id){
            $tienda->clientes()->attach($cliente_id);
        }
        return redirect()->action([TiendaController::class, 'index']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $vendedores = Vendedor::all();
        $clientes = Cliente::all();
        $tienda = Tienda::findOrFail($id);
        return view('tiendas.edit', ['tienda' => $tienda, 'vendedores' => $vendedores, 'clientes' => $clientes]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'sucursal' => 'required|max:75',
            'zona' => 'required|max:35',
            'vendedor_id' => 'required|integer',
            'cliente_ids' => 'required|array',
        ]);
        $tienda = Tienda::findOrFail($id);
        $tienda->sucursal = $request->sucursal;
        $tienda->zona = $request->nivel;
        $tienda->horas_venta = $request->horas_venta;
        $tienda->profesor_id = $request->vendedor_id;
        $tienda->save();
        $tienda->clientes()->detach();
        foreach ($request->cliente_ids as $cliente_id){
            $tienda->clientes()->attach($cliente_id);
        }
        return redirect()->action([TiendaController::class, 'index']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
