@extends('layouts.layout')

@section('title', 'Crear pedido')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center">Crear pedido</h1>
            <form action="{{ route('pedidos.store') }}" method="POST">
                @csrf
                <div class="form-group row">
                    <div class="col">
                        <label for="fecha">Fecha</label>
                        <input type="date" class="form-control" id="fecha" name="fecha">
                    </div>
                    <div class="col">
                        <label for="idCliente">Cliente</label>
                        <select class="form-control" id="idCliente" name="idCliente">
                            @foreach($clientes as $cliente)
                                <option value="{{ $cliente->idCliente }}">{{ $cliente->nombreCliente }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col">
                        <label for="estadoPedido">Estado</label>
                        <select class="form-control" id="estadoPedido" name="estadoPedido">
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