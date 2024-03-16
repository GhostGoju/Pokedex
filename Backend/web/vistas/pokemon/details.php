<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DETALLES</title>
    <link rel="icon" href="/Pokedex/Backend/public/css/img/pokeball.png" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="/Pokedex/Backend/public/css/styles.css" rel="stylesheet">
</head>

<body>


    <?php
    session_start();
    if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {

        header('Location: /Pokedex/Backend/web/vistas/usuarios/login.php');
        exit;
    }


    echo "<div class='body-details-pokemon'>";
    $pokemon_name = $_GET['name'];
    $url = 'https://pokeapi.co/api/v2/pokemon/' . $pokemon_name;
    $data = file_get_contents($url);
    $pokemon_details = json_decode($data, true);

    echo "<div class='tarjet-details'>";

    echo "<div class= 'name-pokemon'>" . ucfirst($pokemon_details['name']) . "</div>";
    echo "<img src='" . $pokemon_details['sprites']['front_default'] . "' alt='" . ucfirst($pokemon_details['name']) . "'>";
    echo "<p>Height: " . $pokemon_details['height'] . "</p>";
    echo "<p>Weight: " . $pokemon_details['weight'] . "</p>";

    echo "<div class='habilidades'>";
    echo "<div class='habilidades-header'>Habilidades</div>";
    echo "<div class='habilidades-body'>";
    foreach ($pokemon_details['abilities'] as $ability) {
        echo "<li>" . ucfirst($ability['ability']['name']) . "</li>";
    }
    echo "</div>";
    echo "</div>";

    echo "</img>";
    echo "</div>";
    ?>



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/Pokedex/Backend/public/js/main.js">
</body>

</html>