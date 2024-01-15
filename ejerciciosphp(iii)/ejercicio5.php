Ejercicio 5: Encontrar Números Primos

Escribe un programa que solicite al usuario ingresar un número entero positivo y luego muestre todos los números primos menores o iguales a ese número.

<?php
//creamos una funcion primo que compruebe si un numero es primo o no
function esPrimo($num) {
    if ($num <= 1) {
        return false;
    }
    for ($i = 2; $i * $i <= $num; $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }
    return true;
}
//pedimos los numeros al usuario y mostramos los numeros primos
$num=readline("dime un numero: ");

echo "Los números primos menores o iguales a $num son: ";
for ($i = 2; $i <= $num; $i++) {
    if (esPrimo($i)) {
        echo $i . ", ";
    }
}
echo "\n";
?>