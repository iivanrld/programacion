<?php
//Ejercicio 3: Uso de If
//Escribe un programa que solicite un número al usuario y determine si es positivo, negativo o igual a cero.
function salta(){
    echo PHP_EOL;
}

$numero = readline("dime un numero: ");
salta();

if ($numero > 0) {
    echo "El número es positivo";
} elseif ($numero < 0) {
    echo "El número es negativo";
} else {
    echo "El número es igual a cero";
}
?>