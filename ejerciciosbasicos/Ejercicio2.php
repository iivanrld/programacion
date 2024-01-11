<?php
//Ejercicio 2: Uso de Strings
//Crea un programa que tome una cadena de texto como entrada y cuente la cantidad de caracteres en la cadena.
function salta(){
    echo PHP_EOL;
}
$texto = readline("ingrese el texto: ");
$cantidadCaracteres = strlen($texto);
salta();
echo "Cantidad de caracteres: " . $cantidadCaracteres
?>