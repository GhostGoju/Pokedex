<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokédex</title>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/Pokedex/Backend/web/vistas/includes/header.php'; ?>
</head>

<body>
    <?php

    function fetchData($url)
    {
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($curl);
        curl_close($curl);
        return $response;
    }

    $url = "https://pokeapi.co/api/v2/pokemon/";

    echo "<div class='pokemon-list'>";
    do {
        $jsonData = fetchData($url);
        $data = json_decode($jsonData, true);

        foreach ($data['results'] as $pokemon) {
            echo "<div class='pokemon'>";
            echo "<p class='nombre'><href='" .  $pokemon['url'] . "' target='_blank'>" . $pokemon['name'] . "</p>";
            echo "</div>";
        }

        $url = $data['next'];
    } while ($url != null);

    echo "</div>";

    ?>






    <?php include $_SERVER['DOCUMENT_ROOT'] . '/Pokedex/Backend/web/vistas/includes/scripts.php'; ?>
</body>

</html>