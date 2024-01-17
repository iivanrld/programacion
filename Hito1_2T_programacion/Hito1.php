<!DOCTYPE html>
<html lang="es">
<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Solocrossfit</title>
</head>
<?php
 $nombre = "";
 $plan = "";
 $peso = 0;
 $categoria = "";
 $eventos = 0;
 $horas_extra = 0;

 function calcularCoste() {
    global $nombre, $plan, $peso, $categoria, $eventos, $horas_extra;

    $tarifa = 0;
    $precio_competicion = 22;
    $precio_privado = 9.50;

    if ($plan == "principiante") {
      $tarifa = 25;
    } else if ($plan == "intermedio") {
      $tarifa = 30;
    } else if ($plan == "elite") {
      $tarifa = 35;
    }

    $costo_entrenamientos = $tarifa * $eventos;
    $costo_competiciones = $precio_competicion * $eventos;
    $costo_privado = $precio_privado * $horas_extra;

    $total = $costo_entrenamientos + $costo_competiciones + $costo_privado;

    echo "Nombre del usuario: " . $nombre . "<br>";
    echo "Eventos presentados este mes: " . $eventos . "<br>";
    echo "Horas extra: " . $horas_extra . "<br>";
    echo "Costo total de los entrenamientos y competiciones del mes: $" . $total . "<br>";
    echo "Categoria de peso: " . $categoria . "<br>";
 }

 if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = test_input($_POST["nombre"]);
    $plan = test_input($_POST["plan"]);
    $peso = test_input($_POST["peso"]);
    $categoria = determinarCategoria($peso);
    $eventos = test_input($_POST["eventos"]);
    $horas_extra = test_input($_POST["horas_extra"]);

    calcularCoste();
 }

 function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
 }

 function determinarCategoria($peso) {
    if ($peso > 100) {
      return "peso pesado";
    } else if ($peso >= 91 && $peso <= 100) {
      return "semipesado";
    } else if ($peso >= 81 && $peso <= 91) {
      return "peso medio";
    } else if ($peso >= 73 && $peso <= 81) {
      return "peso medio ligero";
    } else if ($peso >= 66 && $peso <= 73) {
      return "peso ligero";
    } else {
      return "peso pluma";
    }
 }

 $usuarios = array(
    array('nombre' => 'Ivan', 'plan' => 'Intermedia', 'peso' => 70, 'categoria' => 'intermedia', 'eventos' => 3, 'horas_extra' => 5),
    array('nombre' => 'Laura', 'plan' => 'intermedia', 'peso' => 80, 'categoria' => 'intermedia', 'eventos' => 1, 'horas_extra' => 0),
    array('nombre' => 'Rafa', 'plan' => 'Elite', 'peso' => 90, 'categoria' => 'elite', 'eventos' => 5, 'horas_extras' => 10),
    array('nombre' => 'Irene', 'plan' => 'Principiante', 'peso' => 60, 'categoria' => 'principiante', 'eventos' => 0, 'horas_extra' => 0),
    array('nombre' => 'Daniel', 'plan' => 'Elite', 'peso' => 100, 'categoria' => 'elite', 'eventos' => 3, 'horas_extra' => 15)
);

?>

<html>
<body>

  <h2>Introduzca los datos del usuario</h2>

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

?>
</body>
</html>

