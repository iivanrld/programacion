<?php
//Ejercicio 1: Operaciones Aritméticas
//Escribe un programa que tome dos números como entrada y muestre la suma, resta, multiplicación y división de esos dos números
function salta(){
    echo PHP_EOL;
}
    
$num1 = readline("dime un numero: ");
salta();
$num2 = readline("dime otro numero: ");
salta();

$suma = $num1 + $num2;
$resta = $num1 - $num2;
$multiplicacion = $num1 * $num2;
$division = $num1 / $num2;

echo "Suma: " . $suma;
salta();
echo "Resta: " . $resta;
salta();
echo "Multiplicación: " . $multiplicacion;
salta();
echo "División: " . $division;

?>