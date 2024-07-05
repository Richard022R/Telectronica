@extends('layouts.layout')

@section('content')
    <h1>Crear Documento</h1>
    <form action="{{ route('documentos.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nombreDocumento">Nombre</label>
            <input type="text" class="form-control" id="nombreDocumento" name="nombreDocumento" required>
        </div>
        <div class="form-group">
            <label for="descripcionDocumento">Descripción</label>
            <textarea class="form-control" id="descripcionDocumento" name="descripcionDocumento" required></textarea>
        </div>
        <div class="form-group">
            <label for="idCliente">Cliente</label>
            <select class="form-control" id="idCliente" name="idCliente" required>
                @foreach($clientes as $cliente)
                    <option value="{{ $cliente->idCliente }}">{{ $cliente->nombreCliente }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form> 
@endsection
