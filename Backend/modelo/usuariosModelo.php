<?php
include_once '../db/mysql.php';

class UsuarioModelo
{
    private $conexion;

    public function __construct()
    {
        $database = new BaseDeDatos();
        $this->conexion = $database->getConexion();
    }

    public function registrarUsuario($email, $password)
    {

        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        $query = "INSERT INTO usuarios (email, password) VALUES (?, ?)";
        $stmt = $this->conexion->prepare($query);
        $stmt->bind_param("ss", $email, $hashed_password);

        return $stmt->execute();
    }
}
