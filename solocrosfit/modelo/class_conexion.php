<?php
class Conexion {
    private $conn;

    public function __construct() {
        $this->conn = new PDO('mysql:host=localhost;dbname=Solocrossfit', 'root', '');
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function prepare($query) {
        return $this->conn->prepare($query);
    }
}
