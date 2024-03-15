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
    // OBTENER DATOS DEL API
    function obtenerDatos($url)
    {
        $data = file_get_contents($url);
        return json_decode($data, true);
    }

    echo "<div class='list-pokemon'>";
    echo "<div class='title-list-pokemon'><h1>Pokédex<h1></div>";
    // ESTE ES EL ENDPOINT DEL API
    $url = 'https://pokeapi.co/api/v2/pokemon/';
    function obtenerTodosLosPokemon($url)
    {
        $pokemon_list = obtenerDatos($url);
        // ITERAR SOBRE LOS POKEMON Y LOS MUESTRA EN LA LISTA
        foreach ($pokemon_list['results'] as $pokemon) {
            // REDIRECCIONA A LA PÁGINA DONDE SE MOSTRARÁN LOS DATOS DE LOS POKEMON
            echo "<div class='name-list-pokemon'><a href='details.php?name=" . urlencode($pokemon['name']) . "'>" . ucfirst($pokemon['name']) . "</a></div>";
        }

        // SI HAY MAS DATOS DISPONIBLES, SIGUE PAGINANDO 
        if ($pokemon_list['next']) {
            //LLAMA NUEVAMENTE A LA FUNCION CON LA URL PARA MONSTRAR LA SIGUIENTE PAGINA
            obtenerTodosLosPokemon($pokemon_list['next']);
        }

        echo "</div>";
    }
    // AQUI SE LLAMA LA FUNCION PARA OBTENER TODOS LOS POKEMON
    obtenerTodosLosPokemon($url);
    echo "</div>";

    ?>






    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/Pokedex/Backend/public/js/main.js">
</body>

</html>