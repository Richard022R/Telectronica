<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pedido;
use App\Models\Cliente;
use App\Http\Requests\CreatePedidoRequest;

class PedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pedidos = Pedido::get();
        return view('pedidos', compact('pedidos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $clientes = Cliente::get();
        return view('crearPedido', compact('clientes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreatePedidoRequest $request)
    {
        Pedido::create($request->validated());
        return redirect()->route('pedidos.index');
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
    public function edit(Pedido $pedido, Cliente $cliente)
    {
        return view('editarPedido', [
            'pedido' => $pedido,
            'clientes' => $cliente->get(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CreatePedidoRequest $request, Pedido $pedido)
    {
        $pedido->update($request->validated());
        return redirect()->route('pedidos.index', $pedido);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pedido $pedido)
    {
        $pedido->delete();
        return redirect()->route('pedidos.index');
    }
}
