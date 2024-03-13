<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/Pokedex/Backend/web/vistas/includes/header.php'; ?>

</head>

<body class="body-log-reg">

    <form action="" method="post">

        <div class="form-floating mb-2">
            <input type="email" name="" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Email</label>
        </div>
        <div class="form-floating">
            <input type="password" name="" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Password</label>
        </div>

    </form>










    <?php include $_SERVER['DOCUMENT_ROOT'] . '/Pokedex/Backend/web/vistas/includes/scripts.php'; ?>
</body>

</html>