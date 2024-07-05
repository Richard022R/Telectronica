<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DocumentoVenta;
use App\Models\Cliente;

class DocumentoVentaController extends Controller
{
    public function index()
    {
        $documentos = DocumentoVenta::all();
        return view('documentos.index', compact('documentos'));
    }

    public function create()
    {
        $clientes = Cliente::all();
        return view('documentos.create', compact('clientes'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombreDocumento' => 'required|string|max:255',
            'descripcionDocumento' => 'required|string',
            'idCliente' => 'required|exists:clientes,idCliente',
        ]);

        $documento = new DocumentoVenta();
        $documento->nombreDocumento = $request->input('nombreDocumento');
        $documento->descripcionDocumento = $request->input('descripcionDocumento');
        $documento->idCliente = $request->input('idCliente');
        $documento->save();

        return redirect()->route('documentos.index');
    }
}
