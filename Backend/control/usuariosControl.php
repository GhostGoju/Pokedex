<?php

include '../modelo/usuariosModelo.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        exit();
    }

    $usuario = new usuarioModelo();
    $result = $usuario->usuarioRegistro($email, password_hash($password, PASSWORD_DEFAULT));

    if ($result) {
        $_SESSION['email'] = $email;
        header("Location: ../web/vistas/pokemon/pokedex.php");
        exit();
    }
}
unset($usuario);
