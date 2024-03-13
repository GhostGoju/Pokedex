<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inicio</title>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/Pokedex/Backend/web/vistas/includes/header.php'; ?>
</head>

<body class="body-inicio">
    <div class="container-inicio">

        <div class="content-inicio">

            <div class="header-content-inicio">
                <a href="./Backend/web/vistas/pokemon/pokedex.php">
                    <button type="button" class="btn-verPokedex">POKÉDEX</button>
                </a>
            </div>
            <div class="footer-content-inicio">
                <a href="./Backend/web/vistas/usuarios/login.php">Iniciar Sesion</a>
                <a href="./Backend/web/vistas/usuarios/registro.php">Registrarse</a>
            </div>

        </div>









    </div>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/Pokedex/Backend/web/vistas/includes/scripts.php'; ?>
</body>

</html>