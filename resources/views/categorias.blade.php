@extends('layouts.layout')

@section('title', 'Categorias')

@section('content')
  <!-- Tabla de gestion de categorias -->  
  <div class="row">
    <div class="col-md-12">
      <h1 class="text-center">Gestión de categorias</h1>
      <a href="{{ route('categorias.create') }}" class="btn btn-primary mb-3">Crear categoria</a>
      <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombre</th>
            <th scope="col">Descripción</th>
            <th scope="col">Estado</th>
            <th scope="col">Acciones</th>
          </tr>
        </thead>
        <tbody>
          @foreach($categorias as $categoria)
            <tr>
              <th scope="row">{{ $categoria->idCategoria }}</th>
              <td>{{ $categoria->nombreCategoria }}</td>
              <td>{{ $categoria->descripcionCategoria }}</td>
              <td>{{ $categoria->estadoCategoria }}</td>
              <td>
                <a href="{{ route('categorias.edit', $categoria) }}" class="btn btn-warning">Editar</a>
                <form action="{{ route('categorias.destroy', $categoria) }}" method="POST" style="display: inline;">
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