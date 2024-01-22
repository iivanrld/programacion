<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Introducir datos</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <div class="contenedor">
        <h1>Introducir datos</h1>
        <form action="modelo/gestion_datos.php" method="post">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>
            <br>
            <label for="apellido">Apellido:</label>
            <input type="text" id="apellido" name="apellido" required>
            <br>
            <input type="submit" value="Enviar">
        </form>
        <p><a href="index.php">Volver al inicio</a></p>
    </div>
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