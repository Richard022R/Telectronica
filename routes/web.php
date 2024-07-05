<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DocumentoVentaController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\DetallePedidoController;

Route::resource('documentos', DocumentoVentaController::class);
Route::resource('clientes', ClienteController::class);
Route::resource('categorias', CategoriaController::class);
Route::resource('productos', ProductoController::class);
Route::resource('pedidos', PedidoController::class);
Route::resource('detalle-pedidos', DetallePedidoController::class);
Route::view('/','home')->name('inicio');