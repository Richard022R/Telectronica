<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DocumentoVenta;
use App\Http\Requests\CreateDocumentoVentaRequest;

class DocumentoVentaController extends Controller
{
    public function index()
    {
        $documentos = DocumentoVenta::get();
        return view('documentos.index', compact('documentos'));
    }

    public function create()
    {
        return view('documentos.create', [
            'documento' => new DocumentoVenta(),
        ]);
    }

    public function store(CreateDocumentoVentaRequest $request)
    {
        DocumentoVenta::create($request->validated());
        return redirect()->route('documentos.index');
    }
    
}
