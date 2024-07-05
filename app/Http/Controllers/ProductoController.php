<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Categoria;
use App\Http\Requests\CreateProductoRequest;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productos = Producto::get();
        return view('productos', compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categorias = Categoria::get();
        // return view('crearProducto', [
        //     'producto' => new Producto(),
        // ]);
        return view('crearProducto', compact('categorias'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateProductoRequest $request)
    {
        Producto::create($request->validated());
        return redirect()->route('productos.index');
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
    public function edit(Producto $producto, Categoria $categoria)
    {
        return view('editarProducto', [
            'producto' => $producto,
            'categorias' => $categoria->get(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CreateProductoRequest $request, Producto $producto)
    {
        $producto->update($request->validated());
        return redirect()->route('productos.index', $producto);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Producto $producto)
    {
        $producto->delete();
        return redirect()->route('productos.index');
    }
}
