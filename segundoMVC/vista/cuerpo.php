<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <form action="controlador.php" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br>

        <label for="apellidos">Apellidos:</label>
        <input type="text" id="apellidos" name="apellidos" required><br>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>

<?php
// Recuperar los datos del formulario
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];

// Validar los datos
if (empty($nombre) || empty($apellidos)) {
    echo "Por favor, rellene todos los campos.";
} else {
    echo "¡Gracias, $nombre! Sus apellidos son $apellidos.";
}
require("confirmacion.php");
?>