@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Editar Orden de Compra</h1>
        <form action="{{ route('ordenes_compra.update', $ordenCompra->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="producto_id">Producto:</label>
                <select name="producto_id" id="producto_id" class="form-control">
                    @foreach($productos as $producto)
                        <option value="{{ $producto->id }}" {{ $producto->id == $ordenCompra->producto_id ? 'selected' : '' }}>{{ $producto->nombre }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="proveedor_id">Proveedor:</label>
                <select name="proveedor_id" id="proveedor_id" class="form-control">
                    @foreach($proveedores as $proveedor)
                        <option value="{{ $proveedor->id }}" {{ $proveedor->id == $ordenCompra->proveedor_id ? 'selected' : '' }}>{{ $proveedor->nombre }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="cantidad">Cantidad:</label>
                <input type="number" name="cantidad" id="cantidad" class="form-control" value="{{ $ordenCompra->cantidad }}">
            </div>
            <div class="form-group">
                <label for="fecha_orden">Fecha de Orden:</label>
                <input type="date" name="fecha_orden" id="fecha_orden" class="form-control" value="{{ $ordenCompra->fecha_orden }}">
            </div>
            <div class="form-group">
                <label for="fecha_entrega_estimada">Fecha de Entrega Estimada:</label>
                <input type="date" name="fecha_entrega_estimada" id="fecha_entrega_estimada" class="form-control" value="{{ $ordenCompra->fecha_entrega_estimada }}">
            </div>
            <button type="submit" class="btn btn-primary">Guardar Cambios</button>
            <a href="{{ route('ordenes_compra.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
@endsection
