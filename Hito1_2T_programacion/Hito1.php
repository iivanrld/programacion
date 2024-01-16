<!DOCTYPE html>
<html>
<head>
    <title>Solocrossfit</title>
</head>
<body>

<?php
    function calcular_fianza($usuario, $semanas) {
        $precio_hora = 15;
        $sesion_privada = $usuario['extra_hours'];
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

    $usuario = array(
        array('nombre' => 'Ivan', 'plan' => 'Intermedio', 'peso' => 70, 'categoria' => 'intermedia', 'eventos' => 3, 'horas_extra' => 5),
        array('nombre' => 'Laura', 'plan' => 'Advanzado', 'peso' => 80, 'categoria' => 'avanzada', 'eventos' => 1, 'horas_extra' => 0),
        array('nombre' => 'Rafa', 'plan' => 'Elite', 'peso' => 90, 'categoria' => 'elite', 'eventos' => 5, 'horas_extras' => 10),
        array('nombre' => 'Irene', 'plan' => 'Principiante', 'peso' => 60, 'categoria' => 'principiante', 'eventos' => 0, 'horas_extra' => 0),
        array('nombre' => 'Daniel', 'plan' => 'Elite', 'peso' => 100, 'categoria' => 'elite', 'eventos' => 3, 'horas_extra' => 15)
    );

    foreach ($users as $user) {
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

</body>
</html>