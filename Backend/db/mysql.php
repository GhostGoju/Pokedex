<?php

include '../Config/.DB.inc';

class database
{
    var $conexion;

    function __construct()
    {
        $this->conexion = new mysqli(
            apache_getenv("DBSERVER"),
            apache_getenv("DBUSER"),
            apache_getenv("DBPASSWORD"),
            apache_getenv("DBDATABASE"),
        );

        if ($this->conexion->connect_error) {
            die("Connection failed: " . $this->conexion->connect_error);
        }
    }



    public function getConexion()
    {
        return $this->conexion;
    }
}
