<?php

require_once '../db/mysql.php';

class usuarioModelo
{
    private $conexion;

    public function __construct()
    {
        $db = new database();
        $this->conexion = $db->getConexion();
    }

    public function usuarioRegistro($email, $password)
    {
        $sql = "INSERT INTO usuarios (email, password) VALUES $email, $password)";
        $stmt = $this->conexion->prepare($sql);
        $stmt->bind_param("ss", $email, $password);
        return $stmt->execute();
    }

    public function getByEmail($email)
    {
        $sql = "SELECT * FROM usuarios WHERE email = $email";
        $stmt = $this->conexion->prepare($sql);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }
}
