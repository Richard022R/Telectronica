@extends('layouts.layout')

@section('title', 'Home')

@section('content')
  <h1 class="text-center text-3xl">Home</h1>
  <!-- Vista para acceder a todos los campos a administrar productos, categorías, clientes, pedidos y detalles de pedidos -->
  
  <div class="row my-4">
    <div class="col-md-12 text-center">
      <h2>Gestión de productos</h2>
      <a href="{{ route('productos.index') }}" class="btn btn-primary mb-3">Administrar productos</a>
    </div>
  </div>

  <div class="row my-4">
    <div class="col-md-12 text-center">
      <h2>Gestión de categorías</h2>
      <a href="{{ route('categorias.index') }}" class="btn btn-primary mb-3">Administrar categorías</a>
    </div>
  </div>

  <div class="row my-4">
    <div class="col-md-12 text-center">
      <h2>Gestión de clientes</h2>
      <a href="{{ route('clientes.index') }}" class="btn btn-primary mb-3">Administrar clientes</a>
    </div>
  </div>

  <div class="row my-4">
    <div class="col-md-12 text-center">
      <h2>Gestión de pedidos</h2>
      <a href="{{ route('pedidos.index') }}" class="btn btn-primary mb-3">Administrar pedidos</a>
    </div>
  </div>

  <div class="row my-4">
    <div class="col-md-12 text-center">
      <h2>Documentos de ventas</h2>
      <a href="{{ route('documentos.index') }}" class="btn btn-primary mb-3">Administrar documentos</a>
    </div>
  </div>
@endsection
