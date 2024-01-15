Ejercicio 1: Suma de números pares

Crea un programa que genera un array de números enteros del 1 al 20 y luego use un bucle para calcular la suma de todos los números pares en el array

<?php
// Genera un array de números enteros del 1 al 20
$numeros = range(1, 20);

// Inicializa la variable para almacenar la suma de los números pares
$suma_pares = 0;

// Recorre el array utilizando un bucle for
for ($i = 0; $i < count($numeros); $i++) {
    // Verifica si el número actual es par
    if ($numeros[$i] % 2 == 0) {
        // Si es par, suma su valor a la variable de suma
        $suma_pares += $numeros[$i];
    }
}

// Imprime la suma de los números pares
echo "La suma de los números pares del 1 al 20 es: " . $suma_pares;
?>