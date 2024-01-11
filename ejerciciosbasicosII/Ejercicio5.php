<?php
//Ejercicio 5: Función para Calcular Factorial
//Crea una función llamada factorial que tome un número como argumento y devuelva su factorial. El factorial de un número es el producto de todos los números enteros positivos desde 1 hasta ese número.
//creamos una funcion para saltar de linea
function salta(){
    echo PHP_EOL;
}

//creamos una funcion llamada factorial la cual recive un numero introducido por el usuario por teclado
function factorial($numero) {
    $factorial = 1;

    for ($i = 1; $i <= $numero; $i++) {
        $factorial *= $i;
    }

    return $factorial;
}

$numero = readline("dame un numero: ");
salta();
//aqui si el numero ea mayor que 0 se hara el factorial y si no no se puede hacer
if ($numero >= 0) {
    $resultado = factorial($numero);
    echo "El factorial de {$numero} es {$resultado}.";
} else {
    echo "El número ingresado no es válido. Por favor, intente de nuevo.";
}
?>
