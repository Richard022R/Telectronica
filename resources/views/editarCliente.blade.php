@extends('layouts.layout')

@section('title', 'Editar cliente')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center">Editar cliente</h1>
            <form action="{{ route('clientes.update', $cliente) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group row">
                    <div class="col">
                        <label for="nombreCliente">Nombre</label>
                        <input type="text" class="form-control" id="nombreCliente" name="nombreCliente" value="{{ $cliente->nombreCliente }}">
                    </div>
                    <div class="col">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" id="email" name="email" value="{{ $cliente->email }}">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col">
                        <label for="direccion">Dirección</label>
                        <input type="text" class="form-control" id="direccion" name="direccion" value="{{ $cliente->direccion }}">
                    </div>
                    <div class="col">
                        <label for="ruc">RUC</label>
                        <input type="text" class="form-control" id="ruc" name="ruc" value="{{ $cliente->ruc }}">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col">
                        <label for="estadoCliente">Estado</label>
                        <select class="form-control" id="estadoCliente" name="estadoCliente">
                            <option value="1" {{ $cliente->estadoCliente == 1 ? 'selected' : '' }}>Activo</option>
                            <option value="0" {{ $cliente->estadoCliente == 0 ? 'selected' : '' }}>Inactivo</option>
                        </select>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Actualizar</button>
            </form>
        </div>
    </div>
@endsection