<?php
//Ejercicio 2: Función de Resta
//Crea una función llamada restar que acepte dos números como argumentos y devuelva la resta del primero menos el segundo. Luego, utiliza esta función para calcular la resta de dos números ingresados por el usuario.

function salta(){
    echo PHP_EOL;
}

//pedimos 2 numeros al usuario
$num1 = readline("dame un numero: ");
salta();
$num2 = readline("dame otro numero: ");
salta();
//creamosla funcion resta y damos el resultado
function resta ($num1, $num2) {
    echo"la resta de los dos numeros es: ".$num1-$num2;
}
resta($num1, $num2); 
?>