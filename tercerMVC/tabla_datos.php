<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link ref="stylesheet" href="style.css">
    <title>Tabla de datos del formulario</title>
</head>
<body>
<?php
require("formulario.php");
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
?>
<table>
        <tr>
            <th>Nombre</th>
            <th>Apellido</th>
        </tr>
        <?php
        $filename = 'datos.dat';
        $file = fopen($filename, 'r');
        while (($line = fgets($file)) !== false) {
            echo "<tr>";
            echo "<td>{.$nombre.}</td>";
            echo "<td>{.$apellido.}</td>";
            echo "</tr>";
        }
        fclose($file);
        ?>
    </table>
    <div class="boton">
        <a href="index.php"><button class="boton-volver">Volver a inicio</button></a>
    </div>
</body>
</html>

