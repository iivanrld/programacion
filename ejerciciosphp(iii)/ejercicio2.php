Ejercicio 2: Encontrar el Mayo y el Menor

Crea un programa que solicite al usuario introducir una serie de números enteros (terminando cuando el usuario ingrese un valor negativo). Una vez finalizada la introducción de datos, debe mostrar y encontrar el número más grande y el más pequeño de los números introducidos.

<?php
//definimos una funcion que almacene los numeros introducidos por teclado 
    function main() {
        echo "NÚMEROS MÁS GRANDE Y MÁS PEQUEÑO\n";
        $numeros = array();
        $numero = (int)readline("Escriba un número entero: ");

        //creamos un bucle while que acabe cuando el usuario meta un numero negativo 
        while ($numero >= 0) {
            array_push($numeros, $numero);
            $numero = (int)readline("Escriba un número entero: ");
        }
        //una vez cerrado el bucle buscamos el numero mayor y el numero menor
        $mayor = max($numeros);
        $menor = min($numeros);

        echo "El número más grande es " . $mayor . "\n";
        echo "El número más pequeño es " . $menor . "\n";
    }

    main();
?>