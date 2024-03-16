<?php
class BaseDeDatos
{
    private $conexion;

    public function __construct()
    {
        $this->conexion = new mysqli("localhost", "root", "Qwe.proyectoSena", "Pokedex");

        if ($this->conexion->connect_error) {
            die("Connection failed: " . $this->conexion->connect_error);
        }
    }

    public function getConexion()
    {
        return $this->conexion;
    }
}
