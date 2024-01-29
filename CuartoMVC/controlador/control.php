<?php
require("../vista/formulario.php");
// Recuperar los datos del formulario
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];

// Validar los datos
if (empty($nombre) || empty($apellidos)) {
    echo "Por favor, rellene todos los campos.";
} else {
    echo "¡Gracias, $nombre! Sus apellidos son $apellidos.";
}

require("../modelo/eliminar.php");