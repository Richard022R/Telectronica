@extends('layouts.layout')

@section('title', 'Panel de Administrador')

@section('content')
    <div class="container">
        <h1 class="my-4">Panel de Administrador</h1>
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Gestión de Documentos de Ventas</h5>
                        <p class="card-text">Administra los documentos de ventas de la tienda.</p>
                        <a href="{{ route('documentos.index') }}" class="btn btn-primary">Ir a Documentos de Ventas</a>
                    </div>
                </div>
            </div>
            <!-- Agrega más tarjetas para otras secciones según sea necesario -->
        </div>
    </div>
@endsection
