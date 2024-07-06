@extends('layouts.layout')

@section('title', 'Clientes')

@section('content')
  <!-- Tabla de gestión de clientes -->
  <div class="container mt-5">
    <div class="row">
      <div class="col-md-12">
        <div class="d-flex justify-content-between align-items-center mb-4">
          <h1 class="text-center">Gestión de clientes</h1>
          <a href="{{ route('clientes.create') }}" class="btn btn-primary">Crear cliente</a>
        </div>
        <div class="table-responsive">
          <table class="table table-striped table-bordered">
            <thead class="thead-dark">
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Email</th>
                <th scope="col">Dirección</th>
                <th scope="col">RUC</th>
                <th scope="col">Estado</th>
                <th scope="col">Acciones</th>
              </tr>
            </thead>
            <tbody>
              @foreach($clientes as $cliente)
                <tr>
                  <th scope="row">{{ $cliente->idCliente }}</th>
                  <td>{{ $cliente->nombreCliente }}</td>
                  <td>{{ $cliente->email }}</td>
                  <td>{{ $cliente->direccion }}</td>
                  <td>{{ $cliente->ruc }}</td>
                  <td>
                    <span class="badge badge-{{ $cliente->estadoCliente ? 'success' : 'secondary' }}">
                      {{ $cliente->estadoCliente ? 'Activo' : 'Inactivo' }}
                    </span>
                  </td>
                  <td>
                    <a href="{{ route('clientes.edit', $cliente) }}" class="btn btn-warning btn-sm">Editar</a>
                    <form action="{{ route('clientes.destroy', $cliente) }}" method="POST" class="d-inline-block">
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
