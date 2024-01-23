<?php
require("cuerpo.php");
// Recuperar los datos del formulario
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];

// Validar los datos
if (empty($nombre) || empty($apellidos)) {
    echo "Por favor, rellene todos los campos.";
} else {
    echo "¡Gracias, $nombre! Sus apellidos son $apellidos.";
}

fwrite($archivo,'Hola '.$nombre."".$apellidos.PHP_EOL);

$nombre_archivo = "datos.dat";

if (file_exists($nombre_archivo)){
    $archivo = fopen($nombre_archivo, "r");

    while (feof($archivo)) {
        $linea = fgets($archivo);
        echo $linea;
    }
    fclose($archivo);
}else{
    echo "El archivo que estas intentando leer no existe";
}