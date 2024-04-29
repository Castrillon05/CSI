@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Lista de Órdenes de Compra</h1>
        <a href="{{ route('ordenes_compra.create') }}" class="btn btn-primary mb-3">Agregar Orden de Compra</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Producto</th>
                    <th>Proveedor</th>
                    <th>Cantidad</th>
                    <th>Fecha de Orden</th>
                    <th>Fecha de Entrega Estimada</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($ordenesCompra as $orden)
                    <tr>
                        <td>{{ $orden->id }}</td>
                        <td>{{ $orden->producto->nombre }}</td>
                        <td>{{ $orden->proveedor->nombre }}</td>
                        <td>{{ $orden->cantidad }}</td>
                        <td>{{ $orden->fecha_orden }}</td>
                        <td>{{ $orden->fecha_entrega_estimada }}</td>
                        <td>
                            <a href="{{ route('ordenes_compra.show', $orden->id) }}" class="btn btn-info btn-sm">Ver</a>
                            <a href="{{ route('ordenes_compra.edit', $orden->id) }}" class="btn btn-warning btn-sm">Editar</a>
                            <form action="{{ route('ordenes_compra.destroy', $orden->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
