Ejercicio 3: Tabla de multiplicar.

Crea un programa que solicite al usuario un número y muestre la tabla de multiplicar de ese número del 1 al 10. Utiliza un bucle para generar las multiplicaciones. 

<?php
//creamos una funcion que pida un numero del 1 al 10
    function main() {
        echo "TABLA DE MULTIPLICAR\n";
        $numero = (int)readline("Escriba un número entero: ");
        //si el numero es menor a 0 pedimos otro numero que sea positivo
        if ($numero <= 0) {
            echo "Error: Por favor, ingrese un número positivo.\n";
        } else {
            //si esta entre 1 y 10 hacemos las multiplicaciones y las mostramos
            echo "Tabla del " . $numero . " del 1 al 10:\n";
            for ($i = 1; $i <= 10; $i++) {
                echo $numero . " x " . $i . " = " . ($numero * $i) . "\n";
            }
        }
    }

    main();
?>