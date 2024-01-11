<?php
//Ejercicio 7: Funciones Simples
//Define una función llamada cuadrado que tome un número como argumento y devuelva su valor al cuadrado. Luego, utiliza esta función para calcular el cuadrado de un número ingresado por el usuario.

function cuadrado(){
    $num = readline("dame un numero: ");
    echo "el cuadrado del numero proporcionado es:".$num**2;
}

cuadrado();
?>