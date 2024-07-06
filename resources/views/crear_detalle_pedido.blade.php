@extends('layouts.layout')

@section('title', 'Crear Detalle de Pedido')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center"><h1>Crear Detalle de Pedido</h1></div>

                <div class="card-body">
                    <form action="{{ route('detallepedidos.store') }}" method="POST">
                        @csrf

                        <div class="form-group">
                            <label for="idPedido">Pedido</label>
                            <select class="form-control" id="idPedido" name="idPedido">
                                @foreach($pedidos as $pedido)
                                    <option value="{{ $pedido->idPedido }}">{{ $pedido->idPedido }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="idProducto">Producto</label>
                            <select class="form-control" id="idProducto" name="idProducto">
                                @foreach($productos as $producto)
                                    <option value="{{ $producto->idProducto }}">{{ $producto->nombreProducto }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="idDocumento">Documento</label>
                            <select class="form-control" id="idDocumento" name="idDocumento">
                                @foreach($documentos as $documento)
                                    <option value="{{ $documento->idDocumento }}">{{ $documento->nombreDocumento }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="cantidad">Cantidad</label>
                            <input type="number" class="form-control" id="cantidad" name="cantidad" min="1" required>
                        </div>

                        <div class="form-group">
                            <label for="precioUnitario">Precio Unitario</label>
                            <input type="number" step="0.01" class="form-control" id="precioUnitario" name="precioUnitario" min="0" required>
                        </div>

                        <div class="form-group">
                            <label for="importe">Importe</label>
                            <input type="number" step="0.01" class="form-control" id="importe" name="importe" min="0" required>
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

