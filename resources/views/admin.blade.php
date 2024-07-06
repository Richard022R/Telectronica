@extends('layouts.layout')

@section('title', 'Panel de Administrador')

@section('content')
<div class="container mt-5">
    <h1 class="my-4 text-center">Panel de Administrador</h1>
    <div class="row">
        <div class="col-md-6">
            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title">Gestión de Documentos de Ventas</h5>
                    <p class="card-text">Administra los documentos de ventas de la tienda.</p>
                    <a href="{{ route('documentos.index') }}" class="btn btn-primary">Ir a Documentos de Ventas</a>
                </div>
            </div>
        </div>
        <!-- Agrega más tarjetas para otras secciones según sea necesario -->
        <div class="col-md-6">
            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title">Gestión de Categorías</h5>
                    <p class="card-text">Administra las categorías de productos.</p>
                    <a href="{{ route('categorias.index') }}" class="btn btn-primary">Ir a Categorías</a>
                </div>
            </div>
        </div>
        <!-- Ejemplo de otra sección -->
        <div class="col-md-6">
            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title">Gestión de Clientes</h5>
                    <p class="card-text">Administra los clientes de la tienda.</p>
                    <a href="{{ route('clientes.index') }}" class="btn btn-primary">Ir a Clientes</a>
                </div>
            </div>
        </div>
        <!-- Agrega más tarjetas según las secciones que necesites -->
    </div>
</div>
@endsection
