<!DOCTYPE html>
<html>
<head>
    <title>Solocrossfit</title>
</head>
<body>

<?php
    function calcular_fianza($usuario, $semanas) {
        $precio_hora = 9.50;
        $sesion_privada = $usuario['horas_extra'];
        $total_de_la_sesion = $sesion_privada * $precio_hora;

        $categoria_precio = array(
            'principiante' => 25,
            'intermedia' => 30,
            'elite' => 35
        );

        $categoria_precio_fianza = $categoria_precio[$usuario['categoria']];

        $evento_fianza = $usuario['eventos'] * 22;

        $total_fianza = $total_de_la_sesion + $categoria_precio_fianza + $evento_fianza;

        return $total_fianza * $semanas;
    }

    $usuarios = array(
        array('nombre' => 'Ivan', 'plan' => 'Intermedia', 'peso' => 70, 'categoria' => 'intermedia', 'eventos' => 3, 'horas_extra' => 5),
        array('nombre' => 'Laura', 'plan' => 'intermedia', 'peso' => 80, 'categoria' => 'intermedia', 'eventos' => 1, 'horas_extra' => 0),
        array('nombre' => 'Rafa', 'plan' => 'Elite', 'peso' => 90, 'categoria' => 'elite', 'eventos' => 5, 'horas_extras' => 10),
        array('nombre' => 'Irene', 'plan' => 'Principiante', 'peso' => 60, 'categoria' => 'principiante', 'eventos' => 0, 'horas_extra' => 0),
        array('nombre' => 'Daniel', 'plan' => 'Elite', 'peso' => 100, 'categoria' => 'elite', 'eventos' => 3, 'horas_extra' => 15)
    );

    $pesos = array(
        'peso pesado'.$pesos > 100,
        'semipesado'.$pesos > 91,
        'peso medio'.$pesos > 81,
        'peso medio ligero'.$pesos > 73,
        'peso ligero'.$pesos > 66,
        'peso pluma'.$pesos < 66,
    );
    
    foreach ($usuarios as $usuario) {
        $fianza = calcular_fianza($usuario, 4);
        echo "<p>Nombre: " . $usuario['nombre'] . "</p>";
        echo "<p>Plan: " . $usuario['plan'] . "</p>";
        echo "<p>Peso: " . $usuario['peso'] . " kg</p>";
        echo "<p>Categoria: " . $usuario['categoria'] . "</p>";
        echo "<p>Eventos: " . $usuario['eventos'] . "</p>";
        echo "<p>Horas extra: " . $usuario['horas_extra'] . "</p>";
        echo "<p>Total de fianza: $" . number_format($fianza, 2) . "</p>";
        echo "<hr>";
    }
?>

<h2>Registro de clientes</h2>

<form action="register.php" method="post">
    <label for="nombre">Nombre:</label><br>
    <input type="text" id="nombre" name="nombre"><br>
    <label for="plan">Plan:</label><br>
    <input type="text" id="plan" name="plan"><br>
    <label for="peso">Peso:</label><br>
    <input type="number" id="peso" name="peso"><br>
    <label for="categoria">Categoria:</label><br>
    <input type="text" id="categoria" name="categoria"><br>
    <label for="eventos">Eventos:</label><br>
    <input type="number" id="eventos" name="eventos"><br>
    <label for="horas_extra">Horas extra:</label><br>
    <input type="number" id="horas_extra" name="horas_extra"><br><br>
    <input type="submit" value="Registrar">
</form>

<?php

$user = array(
    'nombre' => $_POST['nombre'],
    'peso' => $_POST['peso'],
    'plan' => $_POST['plan'],
    'categoria' => $_POST['categoria'],
    'eventos' => $_POST['eventos'],
    'horas_extra' => $_POST['horas_extra']
);

$usuarios[] = $usuario;

// Redirigir al usuario a la página de inicio después de registrarlo
header('Location: Hito1.php');

?>
</body>
</html>