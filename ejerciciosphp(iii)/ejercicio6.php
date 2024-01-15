Ejercicio 6: Suma de Dígitos en un Número

Crea un programa que solicite al usuario ingresar un número entero y luego calcule la suma de sus dígitos. Por ejemplo, si el usuario ingresa 12345, el programa debe calcular la suma 1 + 2 + 3 + 4 + 5.

<?php
$num=readline("dame un numero: ");

$suma = 0;
while ($num > 0) {
    $digito = $num % 10;
    $suma += $digito;
    $num = floor($num / 10);
}

echo "La suma de los dígitos del número ingresado es: " . $suma . "\n";
?>