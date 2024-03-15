<?php

require_once '../db/mysql.php';

class usuarioModelo
{
    private $conexion;

    public function __construct()
    {
        $db = new database(); // Utiliza correctamente el nombre de la clase para crear una instancia
        $this->conexion = $db->getConexion();
    }

    public function usuarioRegistro($email, $password)
    {
        // Utiliza consultas preparadas para evitar la inyección de SQL
        $sql = "INSERT INTO usuarios (email, password) VALUES (?, ?)";
        $stmt = $this->conexion->prepare($sql);
        $stmt->bind_param("ss", $email, $password);
        return $stmt->execute();
    }

    public function getByEmail($email)
    {
        // Utiliza consultas preparadas para evitar la inyección de SQL
        $sql = "SELECT * FROM usuarios WHERE email = ?";
        $stmt = $this->conexion->prepare($sql);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }
}
