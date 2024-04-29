<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Proveedores</title>

  </head>

  <body>
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
