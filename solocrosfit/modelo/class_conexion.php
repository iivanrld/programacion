<?php
/* creamos una clase conexion para conectarnos a una base de datos*/
class Conexion{
    private $servidor = "localhost";
    private $usuario = "root";
    private $clave = "";
    private $bdd ="solocrosfit";
    protected $conn;

    public function __construct(){
        $this->conexion = new mysqli($this->servidor,
                                     $this->usuario,
                                     $this->clave,
                                     $this->bdd);
        if($this->conn->connect_error){
            die("Conexión Fallida". $this->conn->connect_error);
        }
        $this->conn->set_charset("UTF8");
        echo "Conexión correcta.".PHP_EOL;
    }

    public function get_conexion(){
        return $this->conn;
    }
    
}