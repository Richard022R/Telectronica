<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DetallePedido;
use App\Models\Pedido;
use App\Models\Producto;
use App\Models\DocumentoVenta;
use App\Http\Requests\CreateDetallePedidoRequest;

class DetallePedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $detallesPedidos = DetallePedido::get();
        $pedidos = Pedido::get();
        $productos = Producto::get();
        $documentos = DocumentoVenta::get();
        return view('crear_detalle_pedido', compact('detallesPedidos', 'pedidos', 'productos', 'documentos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pedidos = Pedido::get();
        $productos = Producto::get();
        $documentos = DocumentoVenta::get();
        return view('crear_detalle_pedido', compact('pedidos', 'productos', 'documentos'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateDetallePedidoRequest $request)
    {
        DetallePedido::create($request->validated());
        return redirect()->route('detallepedidos.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $detallePedido = DetallePedido::findOrFail($id);
        return view('mostrar_detalle_pedido', compact('mostrar_detalle_pedido'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $detallePedido = DetallePedido::findOrFail($id);
        $pedidos = Pedido::all();
        $productos = Producto::all();
        $documentos = DocumentoVenta::all();
        return view('crear_detalle_pedido', compact('detallePedido', 'pedidos', 'productos', 'documentos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'idPedido' => 'required|exists:pedidos,idPedido',
            'idProducto' => 'required|exists:productos,idProducto',
            'idDocumento' => 'required|exists:documentos_venta,idDocumento',
            'cantidad' => 'required|integer|min:1',
            'precioUnitario' => 'required|numeric|min:0',
            'importe' => 'required|numeric|min:0'
        ]);

        $detallePedido = DetallePedido::findOrFail($id);
        $detallePedido->update($request->all());

        return redirect()->route('detallepedidos.index')
            ->with('success', 'Detalle de pedido actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $detallePedido = DetallePedido::findOrFail($id);
        $detallePedido->delete();

        return redirect()->route('detallepedidos.index')
            ->with('success', 'Detalle de pedido eliminado correctamente');
    }
}
