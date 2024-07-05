@extends('layouts.layout')

@section('title', 'Clientes')

@section('content')
  <!-- Tabla de gestion de clientes -->
    <div class="row">
    <div class="col-md-12">
      <h1 class="text-center">Gestión de Detalles de pedidos</h1>
      <a href="{{ route('clientes.create') }}" class="btn btn-primary mb-3">Detalles de pedidos</a>
      <table class="table">
        <thead>
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
              <td>{{ $cliente->estadoCliente }}</td>
              <td>
                <a href="{{ route('clientes.edit', $cliente) }}" class="btn btn-warning">Editar</a>
                <form action="{{ route('clientes.destroy', $cliente) }}" method="POST" style="display: inline;">
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
  </div>

@endsection