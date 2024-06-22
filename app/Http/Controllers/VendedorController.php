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
        $vendedores = Vendedor::select('id', 'nombre_apellido', 'profesion', 'grado_academico', 'telefono')->orderBy('nombre_apellido', 'ASC')->get();
    //    dd(csrf_token());
       return view('vendedores.index', ['vendedores' => $vendedores]);
    }

//    public function search($nombre, $apellido, $sucursal)
//    {
//        $vendedores = Vendedor::where('nombre_apellido', '=', 'nombre')->where;
//        return view('vendedores.index', ['vendedores' => $vendedores]);
//    }

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
            'nombre_apellido' => 'required|min:3',
            'profesion' => 'required',
            'grado_academico' => 'required',
            'telefono' => 'required|numeric'
        ]);

        $vendedor = new Vendedor();
        $vendedor-> nombre_apellido = $request->nombre_apellido;
        $vendedor->profesion = $request->profesion;
        $vendedor->grado_academico = $request->grado_academico;
        $vendedor->telefono = $request->telefono;
        $vendedor->save(); 
        return redirect()->action([VendedorController::class, 'index']);


//        return view('vendedores.create', ['vendedores' => null, 'message' => 'El vendedor fue registrado correctamente']);
    ;       
//        $request->validate([
//            'nombre_apellido' => 'required|max:75',
//            'profesion' => 'required|max:35',
//            'grado_academico' => 'required|max:35',
 //           'telefono' => 'required|max:35',
 //       ]);

 //       $vendedor = new Vendedor($request->all());
 //       $vendedor->save();
 //       return redirect()->action([VendedorController::class, 'index']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $vendedor = Vendedor::findOrFail($id);
        return view('vendedores.view', ['vendedor' => $vendedor]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $vendedor = Vendedor::find($id);
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
        if(Tienda::where('vendedor_id', '=', $id)->first() != null){
            return redirect()->back()->withErrors(['mensaje' => 'El vendedor no puede ser eliminado.']);
        }
        else{
            $vendedor = Vendedor::findOrFail($id);
            $vendedor->delete();
            return redirect()->action([VendedorController::class, 'index']);
        }
       
       
       
       
 //       $vendedor = Vendedor::find($id);
 //       $vendedor->delete();
    }
}
