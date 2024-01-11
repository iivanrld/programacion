<?php
//Ejercicio 3: Función de Multiplicación
//Define una función llamada multiplicar que tome dos números como parámetros y devuelva el producto de esos dos números. Luego, usa esta función para multiplicar dos números ingresados por el usuario.

function salta(){
    echo PHP_EOL;
}
//pedimos 2 numeros al usuario
$num1 = readline("dame un numero: ");
salta();
$num2 = readline("dame otro numero: ");
salta();
//creamos la funcion multiplicacion y damos la solucion
function multiplicacion ($num1, $num2) {
    echo"la multiplicacion de los dos numeros es: ".$num1*$num2;
}
multiplicacion($num1, $num2); 
?>