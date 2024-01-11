<?php
//Ejercicio 4: Función de División
//Escribe una función llamada dividir que tome dos números como argumentos y devuelva el resultado de la división del primero por el segundo. Asegúrate de manejar la división por cero adecuadamente. Luego, utiliza esta función para dividir dos números ingresados por el usuario.
function salta(){
    echo PHP_EOL;
}
//pedimos dos numeros al usuario
$num1 = readline("dame un numero: ");
salta();
$num2 = readline("dame otro numero: ");
salta();
//creamos la funcion division y damos la solucion
function division ($num1, $num2) {
    echo"la division de los dos numeros es: ".$num1/$num2;
}
division($num1, $num2); 
?>