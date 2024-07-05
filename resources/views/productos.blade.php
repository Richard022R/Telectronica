@extends('layouts.layout')

@section('title', 'Productos')

@section('content')
  <!-- Tabla de gestion de productos -->
  <div class="row">
    <div class="col-md-12">
      <h1 class="text-center">Gestión de productos</h1>
      <a href="{{ route('productos.create') }}" class="btn btn-primary mb-3">Crear producto</a>
      <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombre</th>
            <th scope="col">Precio</th>
            <th scope="col">Descripción</th>
            <th scope="col">Stock</th>
            <th scope="col">Estado</th>
            <th scope="col">Acciones</th>
          </tr>
        </thead>
        <tbody>
          @foreach($productos as $producto)
            <tr>
              <th scope="row">{{ $producto->idProducto }}</th>
              <td>{{ $producto->nombreProducto }}</td>
              <td>{{ $producto->descripcionProducto }}</td>
              <td>{{ $producto->precio }}</td>
              <td>{{ $producto->stock }}</td>
              <td>{{ $producto->estadoProducto }}</td>
              <td>
                <a href="{{ route('producto.edit', $producto) }}" class="btn btn-warning">Editar</a>
                <form action="{{ route('productos.destroy', $producto) }}" method="POST" style="display: inline;">
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