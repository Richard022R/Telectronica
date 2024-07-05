@extends('layouts.layout')

@section('title', 'Editar producto')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center">Editar producto</h1>
            <form action="{{ route('productos.update', $producto) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group row">
                    <div class="col">
                        <label for="nombreProducto">Nombre</label>
                        <input type="text" class="form-control" id="nombreProducto" name="nombreProducto" value="{{ $producto->nombreProducto }}">
                    </div>
                    <div class="col">
                        <label for="descripcionProducto">Descripción</label>
                        <input type="text" class="form-control" id="descripcionProducto" name="descripcionProducto" value="{{ $producto->descripcionProducto }}">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col">
                        <label for="precio">Precio</label>
                        <input type="number" class="form-control" id="precio" name="precio" value="{{ $producto->precio }}">
                    </div>
                    <div class="col">
                        <label for="stock">Stock</label>
                        <input type="number" class="form-control" id="stock" name="stock" value="{{ $producto->stock }}">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col">
                        <label for="estadoProducto">Estado</label>
                        <select class="form-control" id="estadoProducto" name="estadoProducto">
                            <option value="1" {{ $producto->estadoProducto == 1 ? 'selected' : '' }}>Activo</option>
                            <option value="0" {{ $producto->estadoProducto == 0 ? 'selected' : '' }}>Inactivo</option>
                        </select>
                    </div>
                    <div class="col">
                        <label for="idCategoria">Categoría</label>
                        <select class="form-control" id="idCategoria" name="idCategoria">
                            @foreach($categorias as $categoria)
                                <option value="{{ $categoria->idCategoria }}" {{ $producto->idCategoria == $categoria->idCategoria ? 'selected' : '' }}>{{ $categoria->nombreCategoria }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Actualizar</button>
            </form>
        </div>
    </div>
@endsection