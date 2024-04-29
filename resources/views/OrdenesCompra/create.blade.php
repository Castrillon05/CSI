<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Orden de compra</title>

  </head>

  <body>
    <div class="container">
        <h1>Agregar Orden de Compra</h1>
        <form action="{{ route('ordenes_compra.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="producto_id">Producto:</label>
                <select name="producto_id" id="producto_id" class="form-control">
                    @foreach($productos as $producto)
                        <option value="{{ $producto->id }}">{{ $producto->nombre }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="proveedor_id">Proveedor:</label>
                <select name="proveedor_id" id="proveedor_id" class="form-control">
                    @foreach($proveedores as $proveedor)
                        <option value="{{ $proveedor->id }}">{{ $proveedor->nombre }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="cantidad">Cantidad:</label>
                <input type="number" name="cantidad" id="cantidad" class="form-control" value="{{ old('cantidad') }}">
            </div>
            <div class="form-group">
                <label for="fecha_orden">Fecha de Orden:</label>
                <input type="date" name="fecha_orden" id="fecha_orden" class="form-control" value="{{ old('fecha_orden') }}">
            </div>
            <div class="form-group">
                <label for="fecha_entrega_estimada">Fecha de Entrega Estimada:</label>
                <input type="date" name="fecha_entrega_estimada" id="fecha_entrega_estimada" class="form-control" value="{{ old('fecha_entrega_estimada') }}">
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
            <a href="{{ route('ordenes_compra.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
@endsection
