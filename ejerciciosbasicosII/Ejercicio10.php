<?php
//Ejercicio 10: Función para Calcular el Área de un Triángulo
//Escribe una función llamada areaTriangulo que tome la base y la altura de un triángulo como parámetros y devuelva el área del triángulo (área = 0.5 * base * altura).
function saltar()
{
    echo PHP_EOL;
}
function areaTriangulo($base, $altura){
    // Validar que la base y la altura sean números positivos
    if ($base <= 0 || $altura <= 0) {
        return "Error: la base y la altura deben ser números positivos.";
    } else {
        // Calcular el área del triángulo
        $area = 0.5 * $base * $altura;

        // Devolver el área del triángulo
        return $area;
    }
}
//pedimos la base y altura por teclado y mostramos la solucion del triangulo
$base = readline("porfavor introduce una base: ");
saltar();
$altura = readline("porfavor introduce una altura: ");
saltar();
areaTriangulo($base, $altura);
?>