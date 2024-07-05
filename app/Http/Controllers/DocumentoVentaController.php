<?php

namespace App\Http\Controllers;

use App\Models\DocumentoVenta;
use Illuminate\Http\Request;

class DocumentoVentaController extends Controller
{
    public function index()
    {
        $documentos = DocumentoVenta::all();
        return view('documentos.index', compact('documentos'));
    }

    public function create()
    {
        return view('documentos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombreDocumento' => 'required|string|max:255',
            'descripcionDocumento' => 'required|string',
        ]);

        DocumentoVenta::create($request->all());
        
        return redirect()->route('documentos.index')
                         ->with('success', 'Documento creado exitosamente.');
    }

    public function edit($id)
    {
        $documento = DocumentoVenta::findOrFail($id);
        return view('documentos.edit', compact('documento'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nombreDocumento' => 'required|string|max:255',
            'descripcionDocumento' => 'required|string',
        ]);

        $documento = DocumentoVenta::findOrFail($id);
        $documento->update($request->all());

        return redirect()->route('documentos.index')
                         ->with('success', 'Documento actualizado exitosamente.');
    }

    public function destroy($id)
    {
        $documento = DocumentoVenta::findOrFail($id);
        $documento->delete();

        return redirect()->route('documentos.index')
                         ->with('success', 'Documento eliminado exitosamente.');
    }
}
