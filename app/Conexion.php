<?php
class Conexion{
    protected $conexion;

    public function __construct()
    {
        try{
            $driver = DB_TIPO.":host=".DB_SERVIDOR.";dbname=".DB_NOMBRE;
            $opciones = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            ];
            $this->conexion = new PDO($driver,DB_USUARIO,DB_CONTRA,$opciones);
        } catch(PDOException $pdoExeption){
            die("❌ Error [Error DB]: ".$pdoExeption->getMessage());
        }
    }
}