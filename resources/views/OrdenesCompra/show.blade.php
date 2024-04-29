@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Detalles de la Orden de Compra</h1>
        <ul class="list-group">
            <li class="list-group-item"><strong>ID:</strong> {{ $ordenCompra->id }}</li>
            <li class="list-group-item"><strong>Producto:</strong> {{ $ordenCompra->producto->nombre }}</li>
            <li class="list-group-item"><strong>Proveedor:</strong> {{ $ordenCompra->proveedor->nombre }}</li>
            <li class="list-group-item"><strong>Cantidad:</strong> {{ $ordenCompra->cantidad }}</li>
            <li class="list-group-item"><strong>Fecha de Orden:</strong> {{ $ordenCompra->fecha_orden }}</li>
            <li class="list-group-item"><strong>Fecha de Entrega Estimada:</strong> {{ $ordenCompra->fecha_entrega_estimada }}</li>
        </ul>
        <a href="{{ route('ordenes_compra.index') }}" class="btn btn-secondary mt-3">Volver</a>
    </div>
@endsection
