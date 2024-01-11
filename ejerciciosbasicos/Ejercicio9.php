<?php
//Ejercicio 9: Uso de Arrays
//Crea un programa que almacene una lista de nombres en un array y luego muestre todos los nombres en la lista.
$nombres = ["Juan", "María", "Pedro", "Laura", "Carlos"];

function mostrarNombres($nombres) {
    echo "Lista de nombres:";
    echo PHP_EOL;
    foreach ($nombres as $nombre) {
        echo "- {$nombre}\n";
    }
}

mostrarNombres($nombres);
?>

