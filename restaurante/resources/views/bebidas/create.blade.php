<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear bebida</title>
</head>
<body>
    <h1>Crear bebida</h1>
    <form action="{{route('bebidas.store')}}" method="post">
        {{-- Laravel nos obliga a poner esto como proteccion ante atqs --}}
        @csrf

        <label>Nombre: </label>
        <input type="text" name="nombre"><br><br>
        <label>Precio: </label>
        <input type="text" name="precio"><br><br>
        <label>Tipo: </label>
        <select name="tipo">
            <option value="Lata">Lata</option>
            <option value="Botella">Botella</option>
            <option value="Copa">Copa</option>
        </select>
        <br><br>
        <input type="submit" value="Crear">
    </form>
    
</body>
</html>