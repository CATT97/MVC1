<?php
class Controlador{
    public $vista;
    public $modelo;

    public function __construct()
    {
        $this->modelo = new Modelo();
        $this->vista = new Vista();   
    }

    public function cargarModelo($nombre){
        require_once 'model/'.$nombre.'.php';
    }
}