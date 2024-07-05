@extends('layouts.layout')

@section('title', 'Pedidos')

@section('content')
    <div class="row">
    <div class="col-md-12">
      <h1 class="text-center">Gestión de pedidos</h1>
      <a href="{{ route('pedidos.create') }}" class="btn btn-primary mb-3">Crear pedido</a>
      <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Fecha</th>
            <th scope="col">Cliente</th>
            <th scope="col">Estado</th>
            <th scope="col">Acciones</th>
          </tr>
        </thead>
        <tbody>
          @foreach($pedidos as $pedido)
            <tr>
              <th scope="row">{{ $pedido->idPedido }}</th>
              <td>{{ $pedido->fecha }}</td>
              <td>{{ $pedido->idCliente }}</td>
              <td>{{ $pedido->estadoPedido }}</td>
              <td>
                <a href="{{ route('pedidos.edit', $pedido) }}" class="btn btn-warning">Editar</a>
                <form action="{{ route('pedidos.destroy', $pedido) }}" method="POST" style="display: inline;">
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