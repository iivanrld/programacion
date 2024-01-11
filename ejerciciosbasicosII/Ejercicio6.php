<?php
//Ejercicio 6: Función para Calcular Potencia
//Define una función llamada potencia que tome dos números como parámetros y devuelva el resultado de elevar el primero a la potencia del segundo. Utiliza un bucle para calcular la potencia.

//creaamos una funcion potencia con una base y exponente
function potencia($base, $exponente) {
    $resultado = 1;

    for ($i = 0; $i < $exponente; $i++) {
        $resultado *= $base;
    }

    return $resultado;
}
//pedimos por teclado al usuario la base y el exponente
$base = readline("ingrese una base: ");

$exponente = readline("introduce un exponente: ");

//si el exponente es mayor que 0 se hara la operacion si no no
if ($exponente >= 0) {
    $resultado = potencia($base, $exponente);
    echo "{$base} elevado a la potencia de {$exponente} es {$resultado}.";
} else {
    echo "El número ingresado no es válido. Por favor, intente de nuevo.";
}

?>