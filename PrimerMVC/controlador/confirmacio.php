<?php
// Function to display the confirmation page
function confirmationPage($nombre, $apellidos) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmación</title>
</head>
<body>
    <h1>¡Gracias, <?php echo $nombre; ?>!</h1>
    <p>Sus apellidos son <?php echo $apellidos; ?>.</p>
    <p>Su información ha sido recibida correctamente.</p>
    <a href="cuerpo.php">Volver al formulario</a>
</body>
</html>
<?php
}
?>