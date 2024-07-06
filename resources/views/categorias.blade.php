@extends('layouts.layout')

@section('title', 'Categorías')

@section('content')
  <!-- Tabla de gestión de categorías -->
  <div class="container mt-5">
    <div class="row">
      <div class="col-md-12">
        <div class="d-flex justify-content-between align-items-center mb-4">
          <h1 class="text-center">Gestión de categorías</h1>
          <a href="{{ route('categorias.create') }}" class="btn btn-primary">Crear categoría</a>
        </div>
        <div class="table-responsive">
          <table class="table table-striped table-bordered">
            <thead class="thead-dark">
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
                  <td>
                    <span class="badge badge-{{ $categoria->estadoCategoria ? 'success' : 'secondary' }}">
                      {{ $categoria->estadoCategoria ? 'Activo' : 'Inactivo' }}
                    </span>
                  </td>
                  <td>
                    <a href="{{ route('categorias.edit', $categoria) }}" class="btn btn-warning btn-sm">Editar</a>
                    <form action="{{ route('categorias.destroy', $categoria) }}" method="POST" class="d-inline-block">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                    </form>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection
