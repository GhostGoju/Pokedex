<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokédex</title>
    <style>
        .pokemon-list {
            display: flex;
            flex-wrap: wrap;
        }

        .pokemon {
            border: 1px solid #ccc;
            padding: 10px;
            margin: 10px;
            width: 200px;
        }

        .nombre {
            font-weight: bold;
            margin-bottom: 5px;
        }
    </style>
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
            // echo "<p class='nombre'><href='" .  $pokemon['url'] . "' target='_blank'>" . $pokemon['name'] . "</p>";
            echo "</div>";
        }

        $url = $data['next'];
    } while ($url != null);

    echo "</div>";

    ?>
</body>
<?php require_once INCLUDES_TEMPLADE . "header.php"; ?>

</html>