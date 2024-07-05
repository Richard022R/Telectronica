<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Http\Requests\CreateCategoriaRequest;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categorias = Categoria::get();
        return view('categorias', compact('categorias'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('crearCategoria', [
            'categoria' => new Categoria(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateCategoriaRequest $request)
    {
        Categoria::create($request->validated());
        return redirect()->route('categorias.index');
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
    public function edit(Categoria $categoria)
    {
        return view('editarCategoria', [
            'categoria' => $categoria,
        ]);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(CreateCategoriaRequest $request, Categoria $categoria)
    {
        $categoria->update($request->validated());
        return redirect()->route('categorias.index', $categoria);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Categoria $categoria)
    {
        $categoria->delete();
        return redirect()->route('categorias.index');
    }
}
