<?php
require("control.php");
$archivo = fopen("datos.dat","w");
// Recuperar los datos del formulario
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];

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

