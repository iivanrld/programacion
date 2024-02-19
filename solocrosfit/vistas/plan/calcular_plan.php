<?php

require_once('../plantillas/encabezado.php');

?>
<!-- aqui importamos la plantila del encabezado -->
<!-- y mostramos una tabla con los datos necesarios de la pagina para registrarse -->
<h1>Plan de estrenamiento - Precio (£GBP)</h1>
    <table>
        <thead>
            <tr>
                <th></th>
                <th>Principiante</th>
                <th>Intermedio</th>
                <th>Elite</th>
                <th>Sesion Privada</th>
                <th>Tasa de competicion</th>
            </tr>
            <tr>
                <th>Precios</th>
                <td>£25.00</td>
                <td>£30.00</td>
                <td>£35.00</td>
                <td>£9.50 por hora</td>
                <td>£22.00 por competicion</td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th>Categorias por peso (kg)</th>
                <td colspan="5">
                    <ul style="list-style-type: none; padding: 0;">
                        <li>Peso pesado: Ilimitado (mas 100kg)</li>
                        <li>Peso pesado-ligero: 100kg</li>
                        <li>Peso medio: 90kg</li>
                        <li>Peso medio-ligero: 81kg</li>
                        <li>Peso ligero: 73kg</li>
                        <li>Peso pluma: 66kg</li>
                    </ul>
                </td>
            </tr>
        </tbody>
    </table>
<!-- aqui tenemos un formulario para poder calcular el plan de entrenamiento  -->

<div class="container mt-5">
<h2>Calcular plan de entrenamiento</h2>

    <form action="controladores/calcularControlador.php" method="POST" class="form">
        <div class="mb-3">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>
        
        <label for="eventos">Numero de Eventos:</label>
        <input type="number" id="eventos" name="eventos" required>
        <input type="hidden" id="accion" name="accion" value="crear">

        <label for="plan">Plan de entrenamiento:</label>
        <select id="plan" name="plan" required>
            <option value="">Selecciona una opcion</option>
            <option value="principiante">Principiante</option>
            <option value="intermedio">Intermedio</option>
            <option value="elite">Elite</option>
        </select><br><br>

        <label for="horas_extra">Horas extra al mes:</label>
        <input type="number" id="horas_extra" name="horas_extra" required><br><br>
    </form>
</div>
<!-- por ultimo importamos tambien la plantilla de nuestro footer -->
<?php
require_once("../plantillas/footer.php");