<?php
include_once '../modelo/usuariosModelo.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $usuarioModelo = new UsuarioModelo();
    $resultado = $usuarioModelo->registrarUsuario($email, $password);

    if ($resultado) {

        session_start();

        $_SESSION['email'] = $email;

        header('Location: ../web/vistas/pokemon/pokedex.php');
        exit;
    } else {
        echo "Error al registrar el usuario.";
    }
}
