@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Detalles del Proveedor</h1>
        <ul class="list-group">
            <li class="list-group-item"><strong>ID:</strong> {{ $proveedor->id }}</li>
            <li class="list-group-item"><strong>Nombre:</strong> {{ $proveedor->nombre }}</li>
            <li class="list-group-item"><strong>Dirección:</strong> {{ $proveedor->direccion }}</li>
            <li class="list-group-item"><strong>Teléfono:</strong> {{ $proveedor->telefono }}</li>
            <li class="list-group-item"><strong>Email:</strong> {{ $proveedor->email }}</li>
        </ul>
        <a href="{{ route('proveedores.index') }}" class="btn btn-secondary mt-3">Volver</a>
    </div>
@endsection
