<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/rutas.css') }}">
    <title>Bus Routes</title>
</head>
<body>

<div class="container">
    <h1>Rutas del Bus</h1>

    <form action="{{ route('bus-routes.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="bus_number">Número de Autobús:</label>
            <input type="text" name="bus_number" id="bus_number" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="destination">Destino:</label>
            <input type="text" name="destination" id="destination" class="form-control" required>
        </div>

        <!-- Agrega más campos según tus necesidades -->

        <button type="submit" class="btn btn-primary">Guardar Ruta</button>
    </form>
</div>

</body>
</html>
