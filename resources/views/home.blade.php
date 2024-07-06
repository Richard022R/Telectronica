@extends('layouts.layout')

@section('title', 'Home')

@section('content')
  <div class="container mt-5">
    <h1 class="text-center text-3xl mb-5">ADMINISTRADOR DE TELECTRONIC STORE</h1>

    <!-- Vista para acceder a todos los campos a administrar productos, categorías, clientes, pedidos y detalles de pedidos -->
    <div class="row">
      <div class="col-md-4 mb-4">
        <div class="card h-100 shadow-sm">
          <div class="card-body text-center">
            <h2 class="card-title">Gestión de productos</h2>
            <a href="{{ route('productos.index') }}" class="btn btn-primary mt-3">Administrar productos</a>
          </div>
        </div>
      </div>

      <div class="col-md-4 mb-4">
        <div class="card h-100 shadow-sm">
          <div class="card-body text-center">
            <h2 class="card-title">Gestión de categorías</h2>
            <a href="{{ route('categorias.index') }}" class="btn btn-primary mt-3">Administrar categorías</a>
          </div>
        </div>
      </div>

      <div class="col-md-4 mb-4">
        <div class="card h-100 shadow-sm">
          <div class="card-body text-center">
            <h2 class="card-title">Gestión de clientes</h2>
            <a href="{{ route('clientes.index') }}" class="btn btn-primary mt-3">Administrar clientes</a>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-4 mb-4">
        <div class="card h-100 shadow-sm">
          <div class="card-body text-center">
            <h2 class="card-title">Gestión de pedidos</h2>
            <a href="{{ route('pedidos.index') }}" class="btn btn-primary mt-3">Administrar pedidos</a>
          </div>
        </div>
      </div>

      <div class="col-md-4 mb-4">
        <div class="card h-100 shadow-sm">
          <div class="card-body text-center">
            <h2 class="card-title">Documentos de ventas</h2>
            <a href="{{ route('documentos.index') }}" class="btn btn-primary mt-3">Administrar documentos</a>
          </div>
        </div>
      </div>

      <div class="col-md-4 mb-4">
        <div class="card h-100 shadow-sm">
          <div class="card-body text-center">
            <h2 class="card-title">Detalles de ventas</h2>
            <a href="{{ route('detallepedidos.index') }}" class="btn btn-primary mt-3">Administrar detalles</a>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
