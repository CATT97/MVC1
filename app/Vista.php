<?php

class Vista{

    public function __construct()
    {
        
    }

    public function mostrar($rutaArchivo){
        require_once 'view/plantilla/cabeza.php';
        require_once 'view/plantilla/menu.php';
        require_once 'view/'.$rutaArchivo.".php";
        require_once 'view/plantilla/pie.php';
    }
}