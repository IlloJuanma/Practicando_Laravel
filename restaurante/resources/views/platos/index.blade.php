<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Platos</title>
</head>
<body>
    <h1>Este es el index de los platos</h1>
    <h2>{{ $mens }}</h2>

    <p>
        <a href="{{ route('platos.create')}}">Crear un Plato</a>
    </p>
    <table>
        <caption>Platos</caption>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Tipo</th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
           {{-- Sin usar blade --}}
            {{-- // foreach ($platos as $plato){
            //     list($nombre, $precio, $cantidad) = $plato;
            //     echo "<tr>";
            //     echo "<td>$nombre</td>";
            //     echo "<td>$precio</td>";
            //     echo "<td>$cantidad</td>";
            //     echo "</tr>";
            // }  --}}
        
            {{-- En Blade  --}}
                @foreach($platos as $plato)
                {{-- aqui html sin mas --}}
                <tr>
                    <td> {{ $plato -> nombre }}</td>
                    <td> {{ $plato -> precio }}</td>
                    <td> {{ $plato -> tipo_plato->tipo }}</td>
                    <td>
                        <form action="{{ route('platos.show', ['plato'=>$plato->id])}}" 
                        method="get">
                            <input type="submit" value="Ver">
                        </form>
                    </td>
                    <td>
                        <form action="{{ route('platos.edit', ['plato'=>$plato->id])}}"
                            method="get">
                            <input type="submit" value="Editar">
                        </form>
                    </td>
                    <td>
                        <form action="{{ route('platos.destroy', ['plato'=>$plato->id])}}"
                            method="post">
                            {{-- Laravel no deja completar un formulario con post
                                sin poner esto --}}
                            @csrf
                            {{ method_field('DELETE')}}
                            <input type="submit" value="Borrar">
                        </form>
                    </td>
                </tr>
                @endforeach   

        </tbody>
</body>
</html>