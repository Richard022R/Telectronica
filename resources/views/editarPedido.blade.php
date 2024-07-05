@extends('layouts.layout')

@section('title', 'Editar pedido')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center">Editar pedido</h1>
            <form action="{{ route('pedidos.update', $pedido) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group row">
                    <div class="col">
                        <label for="fecha">Fecha</label>
                        <input type="date" class="form-control" id="fecha" name="fecha" value="{{ $pedido->fecha }}">
                    </div>
                    <div class="col">
                        <label for="idCliente">Cliente</label>
                        <select class="form-control" id="idCliente" name="idCliente">
                            @foreach($clientes as $cliente)
                                <option value="{{ $cliente->idCliente }}" {{ $pedido->idCliente == $cliente->idCliente ? 'selected' : '' }}>{{ $cliente->nombreCliente }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col">
                        <label for="estadoPedido">Estado</label>
                        <select class="form-control" id="estadoPedido" name="estadoPedido">
                            <option value="1" {{ $pedido->estadoPedido == 1 ? 'selected' : '' }}>Activo</option>
                            <option value="0" {{ $pedido->estadoPedido == 0 ? 'selected' : '' }}>Inactivo</option>
                        </select>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Actualizar</button>
            </form>
        </div>
    </div>
@endsection