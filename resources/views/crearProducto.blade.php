@extends('layouts.layout')

@section('title', 'Crear producto')

@section('content')
    <!-- Formulario para crear nuevo producto -->
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center">Crear producto</h1>
            <form action="{{ route('productos.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nombreProducto">Nombre</label>
                    <input type="text" class="form-control" id="nombreProducto" name="nombreProducto">
                </div>
                <div class="form-group">
                    <label for="descripcionProducto">Descripción</label>
                    <input type="text" class="form-control" id="descripcionProducto" name="descripcionProducto">
                </div>
                <div class="form-group row">
                    <div class="col">
                        <label for="precio">Precio</label>
                        <input type="number" class="form-control" id="precio" name="precio">
                    </div>
                    <div class="col">
                        <label for="stock">Stock</label>
                        <input type="number" class="form-control" id="stock" name="stock">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col">
                        <label for="estadoProducto">Estado</label>
                        <select class="form-control" id="estadoProducto" name="estadoProducto">
                            <option value="1">Activo</option>
                            <option value="0">Inactivo</option>
                        </select>
                    </div>
                    <div class="col">
                        <label for="idCategoria">Categoría</label>
                        <select class="form-control" id="idCategoria" name="idCategoria">
                            @foreach($categorias as $categoria)
                                <option value="{{ $categoria->idCategoria }}">{{ $categoria->nombreCategoria }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Crear</button>
            </form>
        </div>
    </div>
@endsection