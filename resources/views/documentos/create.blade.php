@extends('layouts.layout')

@section('title', 'Crear Documento')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center"><h1>Crear Documento</h1></div>

                <div class="card-body">
                    <form action="{{ route('documentos.store') }}" method="POST">
                        @csrf

                        <div class="form-group">
                            <label for="nombreDocumento">Tipo de Documento</label>
                            <select class="form-control" id="nombreDocumento" name="nombreDocumento" required>
                                <option value="">Seleccione un tipo de documento</option>
                                <option value="Boleta">Boleta</option>
                                <option value="Factura">Factura</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="descripcionDocumento">Descripción</label>
                            <textarea class="form-control" id="descripcionDocumento" name="descripcionDocumento" rows="3" required></textarea>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

