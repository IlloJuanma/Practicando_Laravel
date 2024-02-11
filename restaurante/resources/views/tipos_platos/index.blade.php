<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tipos de Platos</title>
</head>
<body>
    <h1>Tipos de platos</h1>
    <ul>
        @foreach($tipos_platos as $tipo_plato)
            <li>{{ $tipo_plato->tipo }}</li>
            <ul>
                {{-- Llamar a la funcion platos donde esta el hasMany --}}
                @php
                // platos es la funcion, aunque no tengo ()
                    $platos = $tipo_plato -> platos;
                @endphp
                {{-- Ahora un bucle foreach para mostrarlos --}}
                @foreach($platos as $plato)
                {{-- En caso de querer otro dato mas --}}
                <li>{{ $plato -> nombre}} -- {{$plato->precio}}</li>
                @endforeach
            </ul>
        @endforeach
    </ul>
    
</body>
</html>