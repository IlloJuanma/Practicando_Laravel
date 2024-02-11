<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bebidas</title>
</head>
<body>
    <h2>Bebidas</h2>
    <table>
        <caption>Bebidas Ricas</caption>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Tipo</th>
            </tr>
        </thead>
        <tbody>
            @foreach($bebidas as $bebida)
            <tr>
                <td> {{ $bebida-> nombre }}</td>
                <td> {{ $bebida-> precio }}</td>
                <td> {{ $bebida-> tipo }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    
</body>
</html>