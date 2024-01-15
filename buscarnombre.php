<?php
//Dado un array con datos de empleados como el que sigue (copia y pega en tu código php):
//Escribe el código php que pida un nombre por teclado, lo busque en el array $empleados y muestre la información del empleado en cuestión. Si no existe el empleado se comunicará al usuario por el correspondiente mensaje de error. 
$empleados = array(
    array(
        "nombre" => "Juan",
        "puesto" => "Gerente de Ventas",
        "edad" => 35,
        "salario" => 50000
    ),
    array(
        "nombre" => "María",
        "puesto" => "Analista de Marketing",
        "edad" => 28,
        "salario" => 40000
    ),
    array(
        "nombre" => "Carlos",
        "puesto" => "Desarrollador Web",
        "edad" => 30,
        "salario" => 45000
    ),
    array(
        "nombre" => "Ana",
        "puesto" => "Diseñadora Gráfica",
        "edad" => 25,
        "salario" => 38000
    ),
    array(
        "nombre" => "Luis",
        "puesto" => "Contador",
        "edad" => 40,
        "salario" => 55000
    ),
    array(
        "nombre" => "Laura",
        "puesto" => "Analista de Recursos Humanos",
        "edad" => 27,
        "salario" => 42000
    ),
    array(
        "nombre" => "Pedro",
        "puesto" => "Técnico de Soporte",
        "edad" => 32,
        "salario" => 38000
    ),
    array(
        "nombre" => "Elena",
        "puesto" => "Analista de Datos",
        "edad" => 29,
        "salario" => 47000
    ),
    array(
        "nombre" => "Sara",
        "puesto" => "Diseñadora UX/UI",
        "edad" => 26,
        "salario" => 42000
    ),
    array(
        "nombre" => "Ricardo",
        "puesto" => "Especialista en Marketing Digital",
        "edad" => 33,
        "salario" => 48000
    )
);

//pedimos al usuario que de un nombre por teclado
$nombreBuscado = readline("Dime un nombre: ");

    // Buscamos el empleado en el array
    $encontrado = false;
    foreach ($empleados as $empleado) {
        if (strtoupper($empleado["nombre"] == $nombreBuscado)) {
            $encontrado = true;
            echo "Información del empleado encontrado: " . PHP_EOL;
            echo "Nombre: " . $empleado["nombre"] . PHP_EOL;
            echo "Puesto: " . $empleado["puesto"] . PHP_EOL;
            echo "Edad: " . $empleado["edad"] . PHP_EOL;
            echo "Salario: " . $empleado["salario"] . PHP_EOL;
            break;
        }
    }

    // Si no se encontró el empleado se muestra mensaje de error
    if (!$encontrado) {
        echo "Lo sentimos, no se encontró ningún empleado con el nombre ingresado." . PHP_EOL;
    }
?>