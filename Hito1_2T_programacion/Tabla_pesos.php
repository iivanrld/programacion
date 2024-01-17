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
<html>
<body>
    <nav>
    <ul>
          <li><a href="index.html">Inicio</a></li>
          <li><a href="plan_entrenamiento.php">Plan de entrenamiento</a></li>
          <li><a href="Registrar_cliente.php">Registrarse</a></li>
          <li><a href="Tablas_pesos.php">Categorias por pesos</a></li>
    </ul>
    </nav>
</body>
</html>
<?php
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