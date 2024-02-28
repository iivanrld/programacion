<?php
require_once 'class_conexion.php';

class Usuario {

    private $cursor;

    public function __construct() {
        //Realizamos la conexión con la BDD en una sola línea sin utilizar dos variables
        $this->cursor = (new Conexion())->get_conexion();
    }

    public function insertar($usuario, $password){

        
        $sql = $this->cursor->prepare("INSERT INTO usuarios (usuario, password, email) VALUES (?,?,?,?)");
        $sql->bind_param("sss", $usuario, $password); //Las sss son porque todos los valores son de tipo string

        if($sql->execute()){
            return true;
        }else{
            return false;
        }
    }

    function BuscarUsuarioLogin($usuario, $password) {
        global $conexion;
        $sql = "SELECT * FROM usuarios WHERE nombre = ? AND password = ?";
        $stmt = $conexion->prepare($sql);
        $stmt->bind_param("ss", $usuario, $password);
        $stmt->execute();
        $resultado = $stmt->get_result();
        if ($resultado->num_rows > 0) {
            return $resultado->fetch_assoc();
        } else {
            return false;
        }
    }


}
    

