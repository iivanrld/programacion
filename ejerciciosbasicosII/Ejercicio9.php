<?php
//Ejercicio 9: Función para Contar Vocales
//Define una función llamada contarVocales que tome una cadena de texto como argumento y cuente cuántas vocales (a, e, i, o, u) hay en la cadena.

//creamos una funcion para contar vocales y por una array
function contarVocales($cadena) {
    $cadena = strtolower($cadena);
    $vocales = array('a', 'e', 'i', 'o', 'u');
    $contador = 0;

    for ($i = 0; $i < strlen($cadena); $i++) {
        if (in_array($cadena[$i], $vocales)) {
            $contador++;
        }
    }

    return $contador;
}
//una vez que tengamos una cadena de texto la cual pedimos al usuario por teclado, se sumara al contador que hemos creado en la funcion contar vocales +1 cada vez que haya una vocal
//y mostraremos el contador luego
$cadena = readline("porfavor introduzca una cadena de texto: ");

$numero_vocales = contarVocales($cadena);

echo "El número de vocales en la cadena es: {$numero_vocales}.";

?>