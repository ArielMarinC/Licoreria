<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VendedorController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\TiendaController;



 // Route::get('/', function () {
 //   $vendedores = vendedor::find(2);

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
    return view('welcome');
});

Route::get('/vendedores', [VendedorController::class, 'index'])->name('vendedores.index');
Route::get('/clientes', [ClienteController::class, 'index'])->name('Clientes.index');
Route::get('/Tiendas', [TiendaController::class, 'index'])->name('Tiendas.index');

Route::get('/vendedores/create', [VendedorController::class, 'create'])->name('vendedores.create');
Route::post('/vendedores',  [VendedorController::class, 'store'])->name('vendedores.store');

Route::get('/clientes/create', [ClienteController::class, 'create'])->name('clientes.create');
Route::post('/clientes',  [ClienteController::class, 'store'])->name('clientes.store');

Route::get('/tiendas/create', [TiendaController::class, 'create'])->name('tiendas.create');
Route::post('/tiendas',  [TiendaController::class, 'store'])->name('tiendas.store');

Route::get('/vendedores/{id}/editar', [VendedorController::class, 'edit'])->name('vendedores.edit');
Route::put('/vendedores/{id}', [VendedorController::class, 'update'])->name('vendedores.update');

Route::get('/clientes/{id}/editar', [ClienteController::class, 'edit'])->name('cliente.edit');
Route::put('/clientes/{id}', [ClienteController::class, 'update'])->name('clientes.update');

Route::get('/tiendas/{id}/editar', [TiendaController::class, 'edit'])->name('tiendas.edit');
Route::put('/tiendas/{id}', [TiendaController::class, 'update'])->name('tiendas.update');

Route::get('/vendedores/{id}/ver', [VendedorController::class, 'show'])->name('vendedores.show');
Route::get('/clientes/{id}/ver', [ClienteController::class, 'show'])->name('clientes.show');
Route::get('/tiendas/{id}/ver', [TiendaController::class, 'show'])->name('tiendas.show');

Route::delete('/vendedores/{id}', [VendedorController::class, 'destroy'])->name('vendedores.destroy');
Route::delete('/clientes/{id}', [ClienteController::class, 'destroy'])->name('clientes.destroy');
Route::delete('/tiendas/{id}', [TiendaController::class, 'destroy'])->name('tiendas.destroy');

Route::get('/clientes/reporte/web', [ClienteController::class, 'report'])->name('clientes.report');

Route::get('/clientes/reporte/pdf', [ClienteController::class, 'reportPDF'])->name('clientes.reportPDF');
Route::get('/clientes/reporte/excel', [ClienteController::class, 'reportExcel'])->name('clientes.reportExcel');
