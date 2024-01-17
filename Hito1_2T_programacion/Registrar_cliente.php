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
    <nav>
    <ul>
          <li><a href="index.html">Inicio</a></li>
          <li><a href="plan_entrenamiento.php">Plan de entrenamiento</a></li>
          <li><a href="Registrar_cliente.php">Registrarse</a></li>
          <li><a href="Tablas_pesos.php">Categorias por pesos</a></li>
        </ul>
<h2>Introduzca los datos del usuario</h2>
    <form action="#" method="post" onsubmit="return validarFormulario()">
          <section>
            <label for="nombreEmpresa">Nombre/Empresa:</label>
            <input type="text" id="nombreEmpresa" name="nombreEmpresa" pattern="[A-Za-zÁÉÍÓÚáéíóúÑñ\s]{3,}" required>
          </section>
          <section>
            <label for="sectorProfesion">Sector/Profesión:</label>
            <input type="text" id="sectorProfesion" name="sectorProfesion" pattern="[A-Za-zÁÉÍÓÚáéíóúÑñ\s]{3,}" required>
          </section>
          <section>
            <label for="pais">País:</label>
            <select id="pais" name="pais" required>
                <option value="España">España</option>
                <option value="Portugal">Portugal</option>
                <option value="Francia">Francia</option>
                <option value="Inglaterra">Inglaterra</option>
                <option value="Alemania">Alemania</option>
            </select>
          </section>
          <section>
            <label for="correo">Correo electrónico:</label>
            <input type="email" id="correo" name="correo" required>
          </section>
          <section>
            <label for="telefono">Teléfono:</label>
            <input type="tel" id="telefono" name="telefono" pattern="[0-9]{8,12}" required>
          </section>
  
          <button type="submit">Enviar</button>
      </form>
<?php

$us = array(
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

