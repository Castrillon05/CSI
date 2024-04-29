<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Productos</title>

  </head>

  <body>
    <div class="container">
        <h1>Editar Producto</h1>
        <form action="{{ route('productos.update', $producto->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" id="nombre" class="form-control" value="{{ $producto->nombre }}">
            </div>
            <div class="form-group">
                <label for="descripcion">Descripción:</label>
                <textarea name="descripcion" id="descripcion" class="form-control">{{ $producto->descripcion }}</textarea>
            </div>
            <div class="form-group">
                <label for="precio">Precio:</label>
                <input type="number" name="precio" id="precio" class="form-control" value="{{ $producto->precio }}">
            </div>
            <div class="form-group">
                <label for="cantidad_en_stock">Cantidad en Stock:</label>
                <input type="number" name="cantidad_en_stock" id="cantidad_en_stock" class="form-control" value="{{ $producto->cantidad_en_stock }}">
            </div>
            <button type="submit" class="btn btn-pr
