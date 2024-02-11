<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Carta</title>
</head>
<body>
    <h1>La carta</h1>
        <table>
            <caption>Comidas</caption>
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Tipo</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($platos as $plato)
                <tr>
                    <td> {{ $plato[0] }}</td>
                    <td> {{ $plato[1] }}</td>
                    <td> {{ $plato[2] }}</td>
                </tr>
                @endforeach
            </tbody>
    </table>
    <hr>
    <hr>
        <table>
            <caption>Bebidas</caption>
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Tipo</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($bebidas as $bebida)
                <tr>
                    <td> {{ $bebida[0] }}</td>
                    <td> {{ $bebida[1] }}</td>
                    <td> {{ $bebida[2] }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
   
</body>
</html>