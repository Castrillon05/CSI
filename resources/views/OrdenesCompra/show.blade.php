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
