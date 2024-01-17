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