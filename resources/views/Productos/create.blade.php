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
        <h1>Agregar Producto</h1>
        <form action="{{ route('productos.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" id="nombre" class="form-control" value="{{ old('nombre') }}">
            </div>
            <div class="form-group">
                <label for="descripcion">Descripción:</label>
                <textarea name="descripcion" id="descripcion" class="form-control">{{ old('descripcion') }}</textarea>
            </div>
            <div class="form-group">
                <label for="precio">Precio:</label>
                <input type="number" name="precio" id="precio" class="form-control" value="{{ old('precio') }}">
            </div>
            <div class="form-group">
                <label for="cantidad_en_stock">Cantidad en Stock:</label>
                <input type="number" name="cantidad_en_stock" id="cantidad_en_stock" class="form-control" value="{{ old('cantidad_en_stock') }}">
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
            <a href="{{ route('productos.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
@endsection
