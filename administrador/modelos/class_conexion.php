<?php
class Conexion{
    private $servidor = "localhost";
    private $usuario = "root";
    private $clave = "";
    private $bdd ="administrador";
    protected $conexion;

    public function __construct(){
        $this->conexion = new mysqli($this->servidor,
                                     $this->usuario,
                                     $this->clave,
                                     $this->bdd);
        if($this->conexion->connect_error){
            die("Conexión Fallida". $this->conexion->connect_error);
        }
        $this->conexion->set_charset("UTF8");
        echo "Conexión correcta.".PHP_EOL;
    }

    public function get_conexion(){
        return $this->conexion;
    }
}