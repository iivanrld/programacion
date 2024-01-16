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
?>

<!DOCTYPE html>
<html>
<body>

<h2>Introduzca los datos del usuario</h2>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
 Nombre del usuario: <input type="text" name="nombre">
 <br>
 Plan de trabajo: <input type="text" name="plan">
 <br>
 Peso actual en kg: <input type="text" name="peso">
 <br>
 Número de eventos presentados este mes: <input type="text" name="eventos">
 <br>
 Opción de añadir un número de horas extra al mes: <input type="text" name="horas_extra">
 <br><br>
 <input type="submit