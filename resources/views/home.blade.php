@extends('layouts.layout')

@section('title', 'Home')

@section('content')
  <h1 class="text-center text-3xl">Home</h1>
  <!-- Vista para acceder a todos los campos a administrar productos, categorías, clientes, pedidos y detalles de pedidos -->
  <div class="row">
    <div class="col-md-12">
      <h1 class="text-center">Gestión de productos</h1>
      <a href="{{ route('productos.index') }}" class="btn btn-primary mb-3">Administrar productos</a>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <h1 class="text-center">Gestión de categorias</h1>
      <a href="{{ route('categorias.index') }}" class="btn btn-primary mb-3">Administrar categorias</a>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <h1 class="text-center">Gestión de clientes</h1>
      <a href="{{ route('clientes.index') }}" class="btn btn-primary mb-3">Administrar clientes</a>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <h1 class="text-center">Gestión de pedidos</h1>
      <a href="{{ route('pedidos.index') }}" class="btn btn-primary mb-3">Administrar pedidos</a>
    </div>
  </div>


@endsection
