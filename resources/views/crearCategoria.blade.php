@extends('layouts.layout')

@section('title', 'Crear categoria')

@section('content')
    <!-- Formulario para crear nueva categoria -->
      <div class="row">
        <div class="col-md-12">
            <h1 class="text-center">Crear categoria</h1>
            <form action="{{ route('categorias.store') }}" method="POST">
                @csrf
                <div class="form-group row">
                    <div class="col">
                        <label for="nombreCategoria">Nombre</label>
                        <input type="text" class="form-control" id="nombreCategoria" name="nombreCategoria">
                    </div>
                    <div class="col">
                        <label for="estadoCategoria">Estado</label>
                        <select class="form-control" id="estadoCategoria" name="estadoCategoria">
                            <option value="1">Activo</option>
                            <option value="0">Inactivo</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col">
                        <label for="descripcionCategoria">Descripción</label>
                        <input type="text" class="form-control" id="descripcionCategoria" name="descripcionCategoria">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Crear</button>
            </form>
        </div>
    </div>
@endsection