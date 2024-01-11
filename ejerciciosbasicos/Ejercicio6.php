<?php
//Ejercicio 6: Uso de Until
//Crea un programa que solicite al usuario un número y luego imprima todos los números desde 1 hasta ese número utilizando un bucle do-while o until.
$num = readline("dime un numero: ");
$n = 1;
do {
    echo $n . " ";
    $n++;
} while ($n <= $num);

?>