<?php
//Ejercicio 8: Uso de If-Else
//Escribe un programa que solicite al usuario su edad y determine si es mayor de 18 años o no.

function salta(){
    echo PHP_EOL;
}

$edad = readline("dime tu edad: ");
salta();

if ($edad <=17){
    echo "eres menor de edad, tas chiquito ;)";
}else{
    echo "eres mayor de edad ;)";
}
?>c