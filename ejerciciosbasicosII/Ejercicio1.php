<?php
//Ejercicio 1: Función de Suma
//Escribe una función llamada sumar que tome dos números como parámetros y devuelva la suma de esos dos números. Luego, usa esta función para sumar dos números ingresados por el usuario.
function salta(){
    echo PHP_EOL;
}
//pedimos 2 numeros al usuario
$num1 = readline("dame un numero: ");
salta();
$num2 = readline("dame otro numero: ");
salta();
//creamos la funcion suma y damos el resultado
function suma ($num1, $num2) {
    echo"la suma de los dos numeros es: ".$num1+$num2;
}
suma($num1, $num2); 
?>