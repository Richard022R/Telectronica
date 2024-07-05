@extends('layouts.layout')

@section('title', 'Editar categoria')

@section('content')
    <!-- Formulario para editar categoria -->
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center">Editar categoria</h1>
            <form action="{{ route('categorias.update', $categoria) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group row">
                    <div class="col">
                        <label for="nombreCategoria">Nombre</label>
                        <input type="text" class="form-control" id="nombreCategoria" name="nombreCategoria" value="{{ $categoria->nombreCategoria }}">
                    </div>
                    <div class="col">
                        <label for="estadoCategoria">Estado</label>
                        <select class="form-control" id="estadoCategoria" name="estadoCategoria">
                            <option value="1" {{ $categoria->estadoCategoria == 1 ? 'selected' : '' }}>Activo</option>
                            <option value="0" {{ $categoria->estadoCategoria == 0 ? 'selected' : '' }}>Inactivo</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col">
                        <label for="descripcionCategoria">Descripción</label>
                        <input type="text" class="form-control" id="descripcionCategoria" name="descripcionCategoria" value="{{ $categoria->descripcionCategoria }}">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Actualizar</button>
            </form>
        </div>
    </div>
@endsection