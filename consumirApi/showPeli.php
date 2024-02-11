<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver peli</title>
</head>
<body>
    <?php
        // El request_GET siempre se ejecuta, no hace falta ponerlo
        $id = $_GET["id"];

        $apiUrl= "http://localhost:8000/api/films/$id";

        $curl = curl_init();
        // Esto es como inciar una bbdd(en este caso la api)
        curl_setopt($curl, CURLOPT_URL, $apiUrl);
        // Le indicamos la url al curl para indicarle que url usara

        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        // Guardarlo en una variable
        $respuesta = curl_exec($curl);

        // Vamos a convertir el json en un array de objetos
        $array = json_decode($respuesta, true);
        // Convertirlo en un array asociativo y no de objetos, poniendo
        // true al lado
        $peliculas = $array['data'];
        ?>
        <h1>Peliculas</h1>
        <p>Titulo: <?php echo $peliculas['title'] ?></p>
        <p>Titulo: <?php echo $peliculas['duration'] ?></p>
        <p>Titulo: <?php echo $peliculas['age_rate'] ?></p>
    
</body>
</html>