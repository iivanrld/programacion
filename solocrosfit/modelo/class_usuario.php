<?php 
require ('class_conexion.php');
class Usuario {
    public $conn;

    public function __construct() {
        $this->conn = new Conexion();
    }

    public function crear($nombre, $plan, $peso, $categoria) {
        try {
            $query = "INSERT INTO usuarios (nombre, plan, peso, categoria) VALUES (:nombre, :plan, :peso, :categoria)";
            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(':nombre', $nombre);
            $stmt->bindParam(':plan', $plan);
            $stmt->bindParam(':peso', $peso);
            $stmt->bindParam(':categoria', $categoria);
            $stmt->execute();
            return true;
        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
            return false;
        }
    }

    public function ver($nombre) {
        try {
            $query = "SELECT * FROM usuarios WHERE nombre = :nombre";
            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(':nombre', $nombre);
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
            return false;
        }
    }

    public function actualizar($nombre, $plan, $peso, $categoria) {
        try {
            $query = "UPDATE usuarios SET plan = :plan, peso = :peso, categoria = :categoria WHERE nombre = :nombre";
            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(':nombre', $nombre);
            $stmt->bindParam(':plan', $plan);
            $stmt->bindParam(':peso', $peso);
            $stmt->bindParam(':categoria', $categoria);
            $stmt->execute();
            return true;
        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
            return false;
        }
    }

    public function borrar($nombre) {
        try {
            $query = "DELETE * FROM usuarios WHERE nombre = :nombre";
            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(':nombre', $nombre);
            $stmt->execute();
            return true;
        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
            return false;
        }
    }
}