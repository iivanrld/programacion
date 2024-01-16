<!DOCTYPE html>
<html>
<head>
    <title>Solocrossfit</title>
</head>
<body>

<?php
    function calcular_fianza($usuario, $semanas) {
        $precio_hora = 15;
        $sesion_privada = $usuario['horas_extra'];
        $total_de_la_sesion = $sesion_privada * $precio_hora;

        $categoria_precio = array(
            'principiante' => 20,
            'intermedia' => 25,
            'avanzada' => 30,
            'elite' => 35
        );

        $categoria_precio_fianza = $categoria_precio[$usuario['categoria']];

        $evento_fianza = $usuario['eventos'] * 10;

        $total_fianza = $total_de_la_sesion + $categoria_precio_fianza + $evento_fianza;

        return $total_fianza * $semanas;
    }

    $usuarios = array(
        array('nombre' => 'Ivan', 'plan' => 'Intermedio', 'peso' => 70, 'categoria' => 'intermedia', 'eventos' => 3, 'horas_extra' => 5),
        array('nombre' => 'Laura', 'plan' => 'Advanzado', 'peso' => 80, 'categoria' => 'avanzada', 'eventos' => 1, 'horas_extra' => 0),
        array('nombre' => 'Rafa', 'plan' => 'Elite', 'peso' => 90, 'categoria' => 'elite', 'eventos' => 5, 'horas_extras' => 10),
        array('nombre' => 'Irene', 'plan' => 'Principiante', 'peso' => 60, 'categoria' => 'principiante', 'eventos' => 0, 'horas_extra' => 0),
        array('nombre' => 'Daniel', 'plan' => 'Elite', 'peso' => 100, 'categoria' => 'elite', 'eventos' => 3, 'horas_extra' => 15)
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
    <label for="name">Nombre:</label><br>
    <input type="text" id="name" name="name"><br>
    <label for="plan">Plan:</label><br>
    <input type="text" id="plan" name="plan"><br>
    <label for="weight">Peso:</label><br>
    <input type="number" id="weight" name="weight"><br>
    <label for="category">Categoria:</label><br>
    <input type="text" id="category" name="category"><br>
    <label for="events">Eventos:</label><br>
    <input type="number" id="events" name="events"><br>
    <label for="extra_hours">Horas extra:</label><br>
    <input type="number" id="extra_hours" name="extra_hours"><br><br>
    <input type="submit" value="Registrar">
</form>

<?php

$user = array(
    'name' => $_POST['name'],
    'weight' => $_POST['weight'],
    'plan' => $_POST['plan'],
    'category' => $_POST['category'],
    'events' => $_POST['events'],
    'extra_hours' => $_POST['extra_hours']
);

$users[] = $user;

// Redirigir al usuario a la página de inicio después de registrarlo
header('Location: Hito1.php');

?>
</body>
</html>