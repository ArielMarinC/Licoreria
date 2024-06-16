<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Repositories\ClienteRepository;

class ClienteController extends Controller
{
    protected $tiendas;

    public function __construct(ClienteRepository $tiendas){
        $this->tiendas = $tiendas;
    }
    public function index()
    {
        $clientes = Cliente::all();
        return view('clientes.index', ['clientes' => $clientes]);
    }

    public function report()
    {
        $clientes = $this->tiendas->obtenerLosClientesRegistradosEnUnaTienda();
        return view('alumnos.report', ['alumnos' => $clientes]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('clientes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre_apellido' => 'required|max:75',
            'edad' => 'required|integer',
        ]);        
        $cliente = new Cliente($request->all());
        $cliente->save();
        return redirect()->action([ClienteController::class, 'index']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $cliente = Cliente::findOrFail($id);
        return view('clientes.view', ['cliente' => $cliente]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $cliente = Cliente::findOrFail($id);
        return view('clientes.edit', ['cliente' => $cliente]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nombre_apellido' => 'required|max:75',
            'edad' => 'required|integer',
        ]);
        $cliente = Cliente::findOrFail($id);
        $cliente->nombre_apellido = $request->nombre_apellido;
        $cliente->edad = $request->edad;
        $cliente->telefono = $request->telefono;
        $cliente->direccion = $request->direccion;
        $cliente->save();
        return redirect()->action([ClienteController::class, 'index']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        if(DB::table('cliente_tienda')->where('cliente_id', '=', $id)->first() != null){
            return redirect()->back()->withErrors(['mensaje' => 'El cliente no puede ser eliminado.']);
      }
      else{
            $cliente = Cliente::findOrFail($id);
            $cliente->delete();
            return redirect()->action([ClienteController::class, 'index']);
      }

//        $cliente = Cliente::find($id);
//        $cliente->delete();
    }
}
