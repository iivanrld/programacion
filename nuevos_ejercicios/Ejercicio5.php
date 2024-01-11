<?php
//Ejercicio 5: Uso de While
//Escribe un programa que solicite al usuario un número y luego imprima todos los números desde 1 hasta ese número utilizando un bucle while.
$num =readline("dime un numero: ");

$n = 1;
while ($n <= $num) {
    echo $n . " ";
    $n++;
}

?>