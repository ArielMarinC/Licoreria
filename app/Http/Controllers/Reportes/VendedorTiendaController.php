<?php

namespace App\Http\Controllers\Reportes;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Models\Vendedor;
use app\Repositories\VendedorRepository;
use Barryvdh\DomPDF\Facade\Pdf;

class VendedorTiendaController extends Controller
{
    protected $reportVendedor;
    public function __construc(VendedorRepository $reportVendedor)
    {
        $this->reportVendedor = $reportVendedor;
    }

    public function getVendedoresTienda(){
        $vendedores = $this->reportVendedor->getVendedorTienda();
    //    $vendedores = Vendedor::select('id', 'nombre_apellido', 'profesion', 'grado_academico', 'telefono')->orderBy('nombre_apellido', 'ASC')->get();
        return view('reports.vendedores.index', ['vendedores' => $vendedores]);
    }

    public function reportPDF(){
    'vendedores' => $this->reportVendedor->getVendedoresTienda();
    $data = [
        'Vendedores' => $vendedores,
    ];

    $pdf = pdf::loadView('reports.vendedores.pdf', $data);
    return $pdf->stream();
}
}
