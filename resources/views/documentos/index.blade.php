@extends('layouts.layout')

@section('content')
    <div class="container">
        <h1>Documentos de Ventas</h1>
        <a href="{{ route('documentos.create') }}" class="btn btn-primary mb-3">Crear Documento</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($documentos as $documento)
                    <tr>
                        <td>{{ $documento->idDocumento }}</td>
                        <td>{{ $documento->nombreDocumento }}</td>
                        <td>{{ $documento->descripcionDocumento }}</td>
                        <td>
                            <a href="{{ route('documentos.edit', $documento->idDocumento) }}" class="btn btn-warning">Editar</a>
                            <form action="{{ route('documentos.destroy', $documento->idDocumento) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
