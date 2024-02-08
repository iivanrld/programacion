<?php
require_once 'class_conexion.php';

class Libro {

    private $cursor;

    public function __construct() {
        //Realizamos la conexión con la BDD en una sola línea sin utilizar dos variables
        $this->cursor = (new Conexion())->get_conexion();
    }

    public function insertar($titulo, $autor, $genero){

        $sql = $this->cursor->prepare("INSERT INTO libros (titulo, autor, genero) VALUES (?,?,?)");
        $sql->bind_param("sss", $titulo, $autor, $genero); //Las sss son porque todos los valores son de tipo string

        if($sql->execute()){
            return true;
        }else{
            return false;
        }
    }
}



?>