<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Producto</title>

  </head>

  <body>
    <div class="container">
        <h1>Detalles del Producto</h1>
        <ul class="list-group">
            <li class="list-group-item"><strong>ID:</strong> {{ $producto->id }}</li>
            <li class="list-group-item"><strong>Nombre:</strong> {{ $producto->nombre }}</li>
            <li class="list-group-item"><strong>Descripción:</strong> {{ $producto->descripcion }}</li>
            <li class="list-group-item"><strong>Precio:</strong> {{ $producto->precio }}</li>
            <li class="list-group-item"><strong>Cantidad en Stock:</strong> {{ $producto->cantidad_en_stock }}</li>
        </ul>
        <a href="{{ route('productos.index') }}" class="btn btn-secondary mt-3">Volver</a>
    </div>
@endsection
