<?php

class View
{
    public static function render($params = [])
    {
        $d = json_decode(json_encode($params));

        if (!is_dir(VIEWS)) {
            showError("El directorio de vistas no existe", true);
        }
        $filename = VIEWS . $params["view"] . "View.php";
        if (!is_file($filename))
            showError("la vista no existe", true);

        require_once $filename;
    }
}
