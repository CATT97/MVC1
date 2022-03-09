<?php

class P2controlador extends Controlador{

    public function __construct()
    {
        parent::__construct();
        $this->vista->mostrar('principal/hm.php');
    }
}