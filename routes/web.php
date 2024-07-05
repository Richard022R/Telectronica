<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DocumentoVentaController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\DetallePedidoController;
use App\Http\Controllers\AdminController;

Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
Route::resource('documentos', DocumentoVentaController::class);
Route::resource('clientes', ClienteController::class);
Route::get('categorias', 'App\Http\Controllers\CategoriaController@index')->name('categorias.index');
Route::get('categorias/crear', 'App\Http\Controllers\CategoriaController@create')->name('categorias.create');
Route::get('categorias/{categoria}/editar', 'App\Http\Controllers\CategoriaController@edit')->name('categorias.edit');
Route::put('categorias/{categoria}', 'App\Http\Controllers\CategoriaController@update')->name('categorias.update');
Route::post('categorias', 'App\Http\Controllers\CategoriaController@store')->name('categorias.store');
Route::delete('categorias/{categoria}', 'App\Http\Controllers\CategoriaController@destroy')->name('categorias.destroy');
Route::get('productos', 'App\Http\Controllers\ProductoController@index')->name('productos.index');
Route::get('productos/crear', 'App\Http\Controllers\ProductoController@create')->name('productos.create');
Route::get('productos/{producto}/editar', 'App\Http\Controllers\ProductoController@edit')->name('producto.edit');
Route::put('productos/{producto}', 'App\Http\Controllers\ProductoController@update')->name('productos.update');
Route::post('productos', 'App\Http\Controllers\ProductoController@store')->name('productos.store');
Route::delete('productos/{producto}', 'App\Http\Controllers\ProductoController@destroy')->name('productos.destroy');
Route::resource('pedidos', PedidoController::class);
Route::resource('detalle-pedidos', DetallePedidoController::class);
Route::view('/','home')->name('inicio');