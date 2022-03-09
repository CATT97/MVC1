<?php
class App{

    public function __construct()
    {
        require_once './controller/Principal.controlador.php';
        require_once './controller/P2.controlador.php';
        $principal = new PrincipalControlador();
        $p2 = new P2controlador();
    }
}