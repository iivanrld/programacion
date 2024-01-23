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
            <th>Edad</th>
            <th>Email</th>
        </tr>
        <?php
        $filename = 'datos.dat';
        $file = fopen($filename, 'r');
        while (($line = fgets($file)) !== false) {
            $data = explode(',', $line);
            echo "<tr>";
            echo "<td>{$data[0]}</td>";
            echo "<td>{$data[1]}</td>";
            echo "<td>{$data[2]}</td>";
            echo "</tr>";
        }
        fclose($file);
        ?>
    </table>

    <form action="index.php" method="get">
        <input type="submit" value="Volver al menú principal">
    </form>
</body>
</html>

