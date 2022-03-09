<?php

class Vista{

    public function __construct()
    {
        
    }

    public function mostrar($rutaArchivo){
        require_once 'view/'.$rutaArchivo;
    }
}