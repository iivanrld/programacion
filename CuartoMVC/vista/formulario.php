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
        <div class="boton">
         <a href="index.php"><button class="boton-volver">Volver a inicio</button></a>
        </div>
    </div>
</body>
</html>

<?php
require("../controlador/control.php");
?>