<?php
class App{

    public function __construct()
    {
        $url = $_GET['url'] ?? "";
        $url = rtrim($url, "/");
        $url = explode('/', $url);

        if(empty($url[0])){
            require_once 'controller/Principal.controlador.php';
            $principal = new PrincipalControlador();
            $principal ->inicio();
            return;
        }

        $rutaArchivoControlador = "controller/".ucfirst($url[0]).".controlador.php";
        if(!file_exists($rutaArchivoControlador)){
            die("Error, no existe el controlador");
        }

        require $rutaArchivoControlador;

        $nombreControlador = ucfirst($url[0])."Controlador";
        $controlador = new $nombreControlador;

        if(count($url)==1){
            $controlador->inicio();
        }

        if(count($url)==2){
            if(!method_exists($controlador, $url[1])){
                die("Error, el metodo no existe");
            }

            $controlador->{$url[1]}();
        }
    }
}