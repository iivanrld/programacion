<?php
require_once ('../modelo/class_usuario.php');

switch ($_POST['accion']) {
    case 'crear':
        $controller->insertar($nombre, $plan, $peso, $categoria);
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