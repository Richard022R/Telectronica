@extends('layouts.layout')

@section('title', 'Crear cliente')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center"><h1>Crear cliente</h1></div>

                <div class="card-body">
                    <form action="{{ route('clientes.store') }}" method="POST">
                        @csrf

                        <div class="form-group row">
                            <div class="col">
                                <label for="nombreCliente">Nombre</label>
                                <input type="text" class="form-control" id="nombreCliente" name="nombreCliente" required>
                            </div>
                            <div class="col">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col">
                                <label for="direccion">Dirección</label>
                                <input type="text" class="form-control" id="direccion" name="direccion">
                            </div>
                            <div class="col">
                                <label for="ruc">RUC</label>
                                <input type="text" class="form-control" id="ruc" name="ruc">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="estadoCliente">Estado</label>
                            <select class="form-control" id="estadoCliente" name="estadoCliente" required>
                                <option value="1">Activo</option>
                                <option value="0">Inactivo</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Crear</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
