<?php
session_start();
include '/Pokedex/Backend/modelo/usuariosModelo.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Validación básica de correo electrónico y contraseña
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "El correo electrónico proporcionado no es válido.";
        exit();
    }

    $usuario = new usuarioModelo();
    $result = $usuario->usuarioRegistro($email, password_hash($password, PASSWORD_DEFAULT)); // Usar password_hash() para almacenar contraseñas seguras

    if ($result) {
        $_SESSION['email'] = $email;
        header("Location: login.php");
        exit();
    } else {
        echo "Error en el registro.";
    }
}
