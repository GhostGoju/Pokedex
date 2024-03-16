<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokédex</title>
    <link rel="icon" href="/Pokedex/Backend/public/css/img/pokeball.png" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="/Pokedex/Backend/public/css/styles.css" rel="stylesheet">
</head>

<body>
    <?php
    echo "<div class='body-list-pokemon'>";
    function obtenerDatos($url)
    {
        $data = file_get_contents($url);
        return json_decode($data, true);
    }

    echo "<div class='list-pokemon'>";
    echo "<div class='title-list-pokemon'><h1>Pokédex<h1></div>";
    $url = 'https://pokeapi.co/api/v2/pokemon/';
    function obtenerTodosLosPokemon($url)
    {
        $pokemon_list = obtenerDatos($url);
        foreach ($pokemon_list['results'] as $pokemon) {
            echo "<div class='name-list-pokemon'><a href='details.php?name=" . urlencode($pokemon['name']) . "'>" . ucfirst($pokemon['name']) . "</a></div>";
        }

        if ($pokemon_list['next']) {
            obtenerTodosLosPokemon($pokemon_list['next']);
        }

        echo "</div>";
    }
    obtenerTodosLosPokemon($url);
    echo "</div>";
    ?>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>

</html>