Ejercicio 4: Multiplicación de Elementos de un Array
Crea un programa que genere un array de 10 números enteros aleatorios entre 1 y 10. Luego, utiliza un bucle para calcular el producto de todos los elementos del array.

<?php
//creamos una funcion con un array y generamos una lista de numeros aleatorios
$numeros = [];
for ($i = 0; $i < 10;$i++) {
    $numeros[] = rand(1, 10);
}
//la lista de numeros aleatorios se multiplicara y dara el resultado
$producto = 1;
foreach ($numeros as $numero) {
   $producto *= $numero;
}
echo "El producto de los números aleatorios es: " . $producto;
?>