<?php
//Ejercicio 7: Función para Determinar si un Número es Primo
//Escribe una función llamada esPrimo que tome un número como argumento y determine si es primo o no. Un número es primo si solo es divisible por 1 y por sí mismo.

//creamos una funcion para saltar de linea
function salta() {
    echo PHP_EOL;
}
//otra funcion para saber si es primo 
function esPrimo($numero) {
    if ($numero <= 1) {
        return false;
    }

    for ($i = 2; $i <= sqrt($numero); $i++) {
        if ($numero % $i == 0) {
            return false;
        }
    }

    return true;
}

//pedimos al usuario por teclado un numero si al dividir el numero da un resto de 1 es primo y si no no es primo y mostraremos un mensaje
$numero = readline("ingresa un numero: ");
salta();

if (esPrimo($numero)) {
    echo "{$numero} es un número primo.";
} else {
    echo "{$numero} no es un número primo.";
}
?>