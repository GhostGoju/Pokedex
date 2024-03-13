<?php

// * ESTE DOCUMENTO CONTIENE UNA CLASE LA CUAL ME VA A PERMITIR CONECTARME A LA BASE DE DATOS
// * AQUI SE CONSTRUYE EL PLANO PARA EL FUTURO OBJETO QUE ME PERMITIRA CONECTARME A LA BASE DE DATOS

class dataBase  //*ESTA ES LA CLASE (PLANO)
{
    var $conexion;     //*LA VARIABLE ES DONDE SE VA A ALMACENAR LA CONEXION CON LA BASE DE DATOS

    function __construct()
    {
        $this->conexion = new mysqli(
            apache_getenv("DBSERVER"),
            apache_getenv("DBUSER"),                               //* DATOS GUARDADOS EN EL DOCUMENTO DB.INC
            apache_getenv("DBPASSWORD"),
            apache_getenv("DBDATABASE"),
        );

        if ($this->conexion->connect_error) {
            die("Connection failed: " . $this->conexion->connect_error);                 //* PRUEBA DE CONEXION
        }
    }



    public function getConexion()                  //* ESTA FUNCION PERMITE A OTRAS PARTES DEL CODIGO CONSULTAR LA BASE DE DATOS
    {                                              //* SE CREA LA FUNCION GETCONEXION LO CUAL CUANDO OTRA PARTE DEL CODIGO LA LLAME
        return $this->conexion;                    //* DEVOLVERA LA VARIABLE CONEXION. lA CUAL INICIA EN LA LINEA 8
    }
}
