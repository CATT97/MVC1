<?php

class Usuario extends Modelo{
    public $cedula;
    public $nombre;
    public $corre;
    public $password;

    public function __construct($cedula,$nombre,$correo,$password)
    {
        parent:: __construct();
        $this->cedula = $cedula;
        $this->nombre = $nombre;
        $this->correo = $correo;
        $this->password = $password;
    }

    public function guardar(){
        try{
            $query = "INSERT INTO usuarios(cedula,nombre,correo,password) values(:cedula,:nombre,:correo,:password)";
            $consulta = $this->conexion->prepare($query);
            $consulta->execute([":cedula"=>$this->cedula, ":nombre"=>$this->nombre, ":correo"=>$this->correo, ":password"=>$this->password]);
        }catch(PDOException $error){
            die("Error al guardar el usuario: "-$error->getMessage());
        }
    }

    public function listarTodos(){
        try{
            $query = "SELECT * FROM Usuarios";
            $data = $this->conexion->query($query, PDO::FETCH_ASSOC);
            $usuarios = [];
            foreach($data as $row){
                $usuario = new Usuario($row['cedula'],$row['nombre'],$row['correo'],$row['password']);
                array_push($usuarios,$usuario);
            }
            return $usuarios;
        }catch(PDOException $error){
            die("Error no se pudo listar los usuarios: "-$error->getMessage());
        }
    }
}