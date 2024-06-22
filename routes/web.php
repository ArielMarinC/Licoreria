<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Models\Cliente;
use App\Http\Controllers\VendedorController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\TiendaController;
use App\Http\Controllers\Reportes\VendedorTiendaController;




 // Route::get('/', function () {
 //   $vendedores = vendedor::find();

  //  return view('welcome', ['vendedores' => $vendedores->nombre_apellido]);
//});

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome', ['cientes' => $clientes]);
});

// Route::get('/vendedores', [VendedorController::class, 'index'])->name('vendedores.index');
// Route::get('/clientes', [ClienteController::class, 'index'])->name('clientes.index');
// Route::get('/tiendas', [TiendaController::class, 'index'])->name('tiendas.index');

// Route::get('/vendedores/create', [VendedorController::class, 'create'])->name('vendedores.create');
// Route::post('/vendedores',  [VendedorController::class, 'store'])->name('vendedores.store');

// Route::get('/clientes/create', [ClienteController::class, 'create'])->name('clientes.create');
// Route::post('/clientes',  [ClienteController::class, 'store'])->name('clientes.store');

// Route::get('/tiendas/create', [TiendaController::class, 'create'])->name('tiendas.create');
// Route::post('/tiendas',  [TiendaController::class, 'store'])->name('tiendas.store');

// Route::get('/vendedores/{id}/editar', [VendedorController::class, 'edit'])->name('vendedores.edit');
// Route::put('/vendedores/{id}', [VendedorController::class, 'update'])->name('vendedores.update');

// Route::get('/clientes/{id}/editar', [ClienteController::class, 'edit'])->name('clientes.edit');
// Route::put('/clientes/{id}', [ClienteController::class, 'update'])->name('clientes.update');

// Route::get('/tiendas/{id}/editar', [TiendaController::class, 'edit'])->name('tiendas.edit');
// Route::put('/tiendas/{id}', [TiendaController::class, 'update'])->name('tiendas.update');

// Route::get('/vendedores/{id}/ver', [VendedorController::class, 'show'])->name('vendedores.show');
// Route::get('/clientes/{id}/ver', [ClienteController::class, 'show'])->name('clientes.show');
// Route::get('/tiendas/{id}/ver', [TiendaController::class, 'show'])->name('tiendas.show');

// Route::delete('/vendedores/{id}', [VendedorController::class, 'destroy'])->name('vendedores.destroy');
// Route::delete('/clientes/{id}', [ClienteController::class, 'destroy'])->name('clientes.destroy');
// Route::delete('/tiendas/{id}', [TiendaController::class, 'destroy'])->name('tiendas.destroy');

// Route::get('/clientes/reporte/web', [ClienteController::class, 'report'])->name('clientes.report');

// Route::get('/clientes/reporte/pdf', [ClienteController::class, 'reportPDF'])->name('clientes.reportPDF');
// Route::get('/clientes/reporte/excel', [ClienteController::class, 'reportExcel'])->name('clientes.reportExcel');


Route::get('reportes/vendedores', [VendedorTiendaController::class, 'index'])->name('reportes.vendedores.index');
Route::get('reportes/vendedores/pdf', [VendedorTiendaController::class, 'report'])->name('reportes.vendedores.pdf');

Route::get('/vendedores', [VendedorController::class, 'index'])->name('vendedores.index');
//Route::get('/vendedores/{vendedorId}', [VendedorController::class, 'show']);
Route::get('/vendedores/create', [VendedorController::class, 'create'])->name('vendedores.create');
Route::post('/vendedores/store', [VendedorController::class, 'store'])->name('vendedores.store');
Route::get('/vendedores/edit/{vendedorId}', [VendedorController::class, 'edit'])->name('vendedores.edit');
Route::put('/vendedores/update/{vendedorId}', [VendedorController::class, 'update'])->name('vendedores.update');
Route::delete('/vendedores/form/delete/{vendedorId}', [VendedorController::class, 'destroy']);

Route::get('/clientes', [ClienteController::class, 'index'])->name('clientes.index');
Route::get('/clientes/{clienteId}', [ClienteController::class, 'show'])->name('clientes.show');
Route::get('/clientes/create', [ClienteController::class, 'create'])->name('clientes.create');
Route::post('/clientes/store', [ClienteController::class, 'store'])->name('clientes.store');
Route::get('/clientes/edit/{clienteId}', [ClienteController::class, 'edit'])->name('clientes.edit');
Route::put('/clientes/update/{clienteId}', [ClienteController::class, 'update'])->name('clientes.update');
Route::delete('/clientes/delete/{clienteId}', [ClienteController::class, 'destroy'])->name('clientes.destroy');

Route::get('/tiendas', [TiendaController::class, 'index']);
Route::get('/tiendas/{tiendaId}', [TiendaController::class, 'show']);
Route::get('/tiendas/create', [TiendaController::class, 'create'])->name('tiendas.create');
Route::post('/tiendas/store', [TiendaController::class, 'store'])->name('tiendas.store');
Route::get('/tiendas/edit/{tiendaId}', [TiendaController::class, 'edit'])->name('tiendas.edit');
Route::put('/tiendas/update/{tiendaId}', [TiendaController::class, 'update'])->name('tiendas.update');
Route::delete('/tiendas/form/delete/{tiendaId}', [TiendaController::class, 'destroy'])->name('tiendas.destroy');

// Route::get('/vendedores/{id}/ver', [VendedorController::class, 'show'])->name('vendedores.show');
// Route::get('/clientes/{id}/ver', [ClienteController::class, 'show'])->name('clientes.show');
// Route::get('/tiendas/{id}/ver', [TiendaController::class, 'show'])->name('tiendas.show');

// Route::delete('/vendedores/{id}', [VendedorController::class, 'destroy'])->name('vendedores.destroy');
// Route::delete('/clientes/{id}', [ClienteController::class, 'destroy'])->name('clientes.destroy');
// Route::delete('/tiendas/{id}', [TiendaController::class, 'destroy'])->name('tiendas.destroy');

Route::get('/clientes/reporte/web', [ClienteController::class, 'report'])->name('clientes.report');

Route::get('/clientes/reporte/pdf', [ClienteController::class, 'reportPDF'])->name('clientes.reportPDF');
Route::get('/cliente/reporte/excel', [ClienteController::class, 'reportExcel'])->name('cliente.reportExcel');