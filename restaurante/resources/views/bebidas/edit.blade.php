<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar bebida</title>
</head>
<body>
    <h1>Editar bebida</h1>
    <form action="{{route('bebidas.update', ['bebida'=>$bebida->id])}}" method="post">
        {{-- Laravel nos obliga a poner esto como proteccion ante atqs --}}
        @csrf

        {{ method_field('PUT') }}
        <label>Nombre: </label>
        <input type="text" name="nombre" value={{ $bebida->nombre}}><br><br>
        <label>Precio: </label>
        <input type="text" name="precio" value={{ $bebida->precio}}><br><br>
        <label>Tipo: </label>
        <select name="tipo">
            <option selected hidden value="{{ $bebida->tipo}}">{{$bebida->tipo}}</option>
            <option value="Lata">Lata</option>
            <option value="Botella">Botella</option>
            <option value="Copa">Copa</option>
        </select>
        <br><br>
        <input type="submit" value="Editar">
    </form>
    
</body>
</html>