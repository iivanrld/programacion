<?php 
require_once ('class_conexion.php');
/* importamos la clase conexion y creamos una clase usuario*/
class Usuario {
    public $servidor;
    public $usuario;
    public $clave;
    public $bdd;
    protected $conn;

    public function __construct() {
        $this->servidor = "localhost";
        $this->usuario = "root";
        $this->clave = "";
        $this->bdd = "solocrosfit";
    }

    /* la clase usuario va a tener un CRUD para crear, ver, actualizar y borrar los datos de la base de datos del usuario*/
    /* aqui tenemos la clase que crea al usuario con sus datos*/
    public function insertar($nombre, $plan, $peso, $categoria) {
        $conn = new mysqli($this->servidor, $this->usuario, $this->clave, $this->bdd);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "INSERT INTO usuarios (nombre, plan, peso, categoria) VALUES ('$nombre', '$plan', '$peso', '$categoria')";

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
    }

    public function ver($nombre) {
        $conn = new mysqli($this->servidor, $this->usuario, $this->clave, $this->bdd);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT id, nombre, plan, peso, categoria FROM usuarios WHERE nombre = '$nombre'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "id: " . $row["id"] . "<br>";
                echo "nombre: " . $row["nombre"] . "<br>";
                echo "plan: " . $row["plan"] . "<br>";
                echo "peso: " . $row["peso"] . "<br>";
                echo "categoria: " . $row["categoria"] . "<br>";
                echo "--------------------------------<br>";
            }
        } else {
            echo "No se encontraron resultados";
        }

        $conn->close();
    }

    public function actualizar($nombre, $plan, $peso, $categoria) {
        $conn = new mysqli($this->servidor, $this->usuario, $this->clave, $this->bdd,);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "UPDATE usuarios SET plan = '$plan', peso = '$peso', categoria = '$categoria' WHERE nombre = '$nombre'";

        if ($conn->query($sql) === TRUE) {
            return true;
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
            return false;
             
        }
        $conn->close();
    }

    public function borrar($nombre) {
        $conn = new mysqli($this->servidor, $this->usuario, $this->clave, $this->bdd);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "DELETE FROM usuarios WHERE nombre = '$nombre'";

        if ($conn->query($sql) === TRUE) {
            if ($conn->affected_rows > 0) {
                return true;
            } else {
                return false;
            }
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
            return false;
        }

        $conn->close();
    }
}





?>