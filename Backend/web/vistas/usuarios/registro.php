<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="/Pokedex/Backend/public/css/styles.css" rel="stylesheet">
</head>

<body class="body-log-reg">






    <form class="formulario" action="/Pokedex/Backend/control/usuariosControl.php" method="post" onsubmit="return validarFormulario()">
        <div class="form-header">
            <h2>REGISTRO</h2>
            <p>Aquí podrás registrarte</p>
        </div>
        <div class="form-content">
            <div class="form-floating mb-2">
                <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com" required>
                <label for="email">Email</label>
            </div>
            <div class="form-floating mb-2">
                <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                <label for="password">Password</label>
            </div>
        </div>
        <div class="form-footer">
            <button class="btn-verificacion" type="submit" value="registrar">Registrar</button>
        </div>
    </form>









    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/Pokedex/Backend/public/js/main.js">
</body>

</html>