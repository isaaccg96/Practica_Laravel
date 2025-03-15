<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Películas</title>
    <link rel="stylesheet"  href="{{ asset('css/formulario.css') }}"> <!-- Asegúrate de que el archivo CSS esté vinculado correctamente -->
</head>
<body>

    <form action="/peliculas/store" method="POST">
        @csrf
        <h1>Agregar Película</h1>
        
        <label for="titulo">Título:</label>
        <input type="text" name="titulo" id="titulo" required>
        
        <label for="descripcion">Descripción:</label>
        <textarea name="descripcion" id="descripcion" cols="38" rows="10" required></textarea>
        
        <button type="submit">Guardar</button>
    </form>

</body>
</html>
