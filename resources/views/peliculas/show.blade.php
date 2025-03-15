<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles de la Película</title>
    <link rel="stylesheet" href="{{ asset('css/show.css') }}"> <!-- Asegúrate de que el archivo CSS esté vinculado correctamente -->
</head>
<body>

    <div>
        <div>{{$pelicula->titulo}}</div> <!-- Título de la película -->
        <div>{{$pelicula->descripcion}}</div> <!-- Descripción de la película -->
    </div>

</body>
</html>
