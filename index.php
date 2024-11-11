<?php
    # inicializa una nueva sesión de curl: ch = cURL handle
    const API_url = "https://www.whenisthenextmcufilm.com/api";
    $ch = curl_init(API_url);
    //recibir el resultado del petición sin mostrarla en pantalla
    curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
    //ejecutar una petición
    $result = curl_exec($ch);
    $data = json_decode($result,true);
    curl_close($ch);
    
    //$result = file_get_contents(API_URL);
?>

<style> 
    :root {
        color-scheme: light dark;

    }
    body {
        display: grid;
        place-content: center;

    }
</style>
<head>
    <meta charset="UTF-8" />
    <meta name="description" content="la proxima peli de marvel"/>
    <!-- Centered viewport -->
    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css"
    >
</head>
<main>
    <section>
        <h2>Laproxima pelicula de marvel</h2>
        <img src="<?= $data["poster_url"]?>" width="300" alt="<?= $data["title"]?>" />
    </section>
   <hgroup>
        <h3><?= $data["title"]; ?> se estrena en <?= $data["days_until"]; ?> días</h3>
        <h3>Fecha de estreno</h3> <p><?= $data["release_date"]; ?></p>
   </hgroup>
    <hgroup>
        <p> la siguiente es: <?= $data["following_production"]["title"];?> </p>
    </hgroup>
</main>