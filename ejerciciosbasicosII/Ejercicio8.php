<?php
//Ejercicio 8: Función para Revertir una Cadena
//Crea una función llamada revertirCadena que tome una cadena de texto como parámetro y devuelva la cadena en orden inverso.

//crealos una funcion para revertir una cadena de texto
function revertirCadena($cadena) {
    return strrev($cadena);
}

//pedimos la cadena de texto al usuario por teclado
$cadena = readline("porfavor introduzca una cadena de texto: ");
//una vez tenemos la cadeena se revierte e imprime la cadena en orden inverso
$cadena_invertida = revertirCadena($cadena);

echo "La cadena en orden inverso es: {$cadena_invertida}";
?>