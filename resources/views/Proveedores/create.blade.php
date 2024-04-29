@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Agregar Proveedor</h1>
        <form action="{{ route('proveedores.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" id="nombre" class="form-control" value="{{ old('nombre') }}">
            </div>
            <div class="form-group">
                <label for="direccion">Dirección:</label>
                <input type="text" name="direccion" id="direccion" class="form-control" value="{{ old('direccion') }}">
            </div>
            <div class="form-group">
                <label for="telefono">Teléfono:</label>
                <input type="text" name="telefono" id="telefono" class="form-control" value="{{ old('telefono') }}">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}">
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
            <a href="{{ route('proveedores.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
@endsection
