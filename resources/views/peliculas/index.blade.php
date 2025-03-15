<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Películas</title>
    <link rel="stylesheet" href="{{ asset('css/peliculas.css') }}">
</head>
<body>

    <h1>Películas</h1>

    <ul>
        @foreach($peliculas as $pelicula)
            <li>
                <a href="/peliculas/{{$pelicula->id}}">
                    {{$pelicula -> titulo}}
                </a>
            </li>
        @endforeach
    </ul>
</body>
</html>
