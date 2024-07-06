@extends('layouts.layout')

@section('title', 'Crear categoría')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center"><h1>Crear categoría</h1></div>

                <div class="card-body">
                    <form action="{{ route('categorias.store') }}" method="POST">
                        @csrf

                        <div class="form-group">
                            <label for="nombreCategoria">Nombre</label>
                            <input type="text" class="form-control" id="nombreCategoria" name="nombreCategoria" required>
                        </div>

                        <div class="form-group">
                            <label for="estadoCategoria">Estado</label>
                            <select class="form-control" id="estadoCategoria" name="estadoCategoria" required>
                                <option value="1">Activo</option>
                                <option value="0">Inactivo</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="descripcionCategoria">Descripción</label>
                            <input type="text" class="form-control" id="descripcionCategoria" name="descripcionCategoria">
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
