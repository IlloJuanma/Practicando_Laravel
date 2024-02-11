<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consurmi mi api</title>
</head>
<body>
<?php
    $apiUrl= "http://localhost:8000/api/films";

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
    // $nombre = $peliculas['title'];
    // $duracion = $peliculas['duration'];
    // $edad = $peliculas['age_rate'];
    ?>
    <h1>Peliculas</h1>
    <?php foreach($peliculas as $pelicula){ ?>
        <hr>
        <p>Titulo: <?php echo $pelicula['title'] ?></p>
        <p>Duracion: <?php echo $pelicula['duration'] ?></p>
        <p>Edad recomendada: <?php echo $pelicula['age_rate'] ?></p>
        <!-- Para enviar el id de cada anime a la otra pagina
        debemos pasarle el id, viendo que lo identifica (mal_id) -->
        <p><a href="showPeli.php?id=<?php echo $pelicula['id'] ?>">Ver detalles</a></p>
        
        <?php } ?>
   
</body>
</html>
<!-- <p>Titulo: <?php  $nombre ?></p>
<p>Duracion: <?php $duracion ?></p>
<p>Edad recomendada: <?php  $duracion ?></p> -->