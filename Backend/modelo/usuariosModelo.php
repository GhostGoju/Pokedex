<?php

require_once "db/dataBase.php";

class usuarioModelo
{
    private $conexion;

    public function __construct()
    {
        $db = new dataBase();
        $this->conexion = $db->getConexion();
    }

    public function usuarioRegistro($email, $password)
    {
        $sql = "INSERT INTO usuarios (email, password) VALUES ('$email', '$password')";
        return $this->conexion->query($sql);
    }

    public function getByEmail($email)
    {
        $sql = "SELECT * FROM usuarios WHERE email = '$email'";
        $result = $this->conexion->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }
}
