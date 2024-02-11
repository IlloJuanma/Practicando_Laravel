<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Artistas</title>
</head>
<body>
    <h2>Lista de artistas</h2>
    <ul>
        @foreach($artistas as $artista)
        <li>Nombre: {{$artista -> nombre}}</li>
        <li>Genero: {{$artista -> genero_artista}}</li>
        @php
            $canciones = $artista -> canciones;           
        @endphp
        <ul>
            @foreach($canciones as $cancion)
            <li>{{ $cancion-> titulo_cancion }}</li>
            @endforeach
        </ul>    
        <br>
        @endforeach
    </ul>
    
</body>
</html>