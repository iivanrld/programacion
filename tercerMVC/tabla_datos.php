<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link ref="stylesheet" href="style.css">
    <title>Tabla de datos del formulario</title>
</head>
<body>
<table>
        <tr>
            <th>Nombre</th>
            <th>Apellido</th>
        </tr>
        <?php
        $filename = 'datos.dat';
        $file = fopen($filename, 'r');
        while (($line = fgets($file)) !== false) {
            $data = explode(',', $line);
            echo "<tr>";
            echo "<td>{$data[0]}</td>";
            echo "<td>{$data[1]}</td>";
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

