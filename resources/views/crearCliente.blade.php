@extends('layouts.layout')

@section('title', 'Crear cliente')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center">Crear cliente</h1>
            <form action="{{ route('clientes.store') }}" method="POST">
                @csrf
                <div class="form-group row">
                    <div class="col">
                        <label for="nombreCliente">Nombre</label>
                        <input type="text" class="form-control" id="nombreCliente" name="nombreCliente">
                    </div>
                    <div class="col">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" id="email" name="email">
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
                <div class="form-group row">
                    <div class="col">
                        <label for="estadoCliente">Estado</label>
                        <select class="form-control" id="estadoCliente" name="estadoCliente">
                            <option value="1">Activo</option>
                            <option value="0">Inactivo</option>
                        </select>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Crear</button>
            </form>
        </div>
    </div>

@endsection