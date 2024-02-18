<?php
require_once ('../vistas/usuarios/usuarios.php');

class UsuarioController {
    private $usuario;

    public function __construct() {
        $this->usuario = new Usuario();
    }

    public function crear() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nombre = $_POST['nombre'];
            $plan = $_POST['plan'];
            $peso = $_POST['peso'];
            $categoria = $_POST['categoria'];

            if ($this->usuario->crear($nombre, $plan, $peso, $categoria)) {
                header('Location: usuarios.php');
            } else {
                echo 'Error al crear el usuario.';
            }
        } else {
            header('Location: usuario.php');
        }
    }

    public function ver() {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $nombre = $_GET['nombre'];
            $usuarios = $this->usuario->ver($nombre);

            if ($usuarios) {
                // Display the user data
            } else {
                echo 'No se encontró ningún usuario con ese nombre.';
            }
        } else {
            header('Location: usuarios.php');
        }
    }

    public function actualizar() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nombre = $_POST['nombre'];
            $plan = $_POST['plan'];
            $peso = $_POST['peso'];
            $categoria = $_POST['categoria'];

            if ($this->usuario->actualizar($nombre, $plan, $peso, $categoria)) {
                header('Location: usuarios.php');
            } else {
                echo 'Error al actualizar el usuario.';
            }
        } else {
            header('Location: usuario.php');
        }
    }

    public function borrar() {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $nombre = $_GET['nombre'];

            if ($this->usuario->borrar($nombre)) {
                header('Location: usuarios.php');
            } else {
                echo 'Error al borrar el usuario.';
            }
        } else {
            header('Location: usuarios.php');
        }
    }
}

$controller = new UsuarioController();

switch ($_GET['accion']) {
    case 'crear':
        $controller->crear();
        break;
    case 'ver':
        $controller->ver();
        break;
    case 'actualizar':
        $controller->actualizar();
        break;
    case 'borrar':
        $controller->borrar();
        break;
    default:
        header('Location: usuarios.php');
}
?>