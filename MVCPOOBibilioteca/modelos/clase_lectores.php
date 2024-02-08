<?php
class Lector {
    private $cursor;

    public function __construct() {
        //Realizamos la conexión con la BDD en una sola línea sin utilizar dos variables
        $this->cursor = (new Conexion())->get_conexion();
    }

    public function insertar($idlector, $nombre, $apellido, $fecha_alta, $fecha_baja){

        $sql = $this->cursor->prepare("INSERT INTO lectores (idlector, nombre, apellido, fecha_alta, fecha_baja) VALUES (?,?,?,?,?)");
        $sql->bind_param("sssss", $idlector, $nombre, $apellido, $fecha_alta, $fecha_baja); //Las sss son porque todos los valores son de tipo string

        if($sql->execute()){
            return true;
        }else{
            return false;
        }
    }
}


?>