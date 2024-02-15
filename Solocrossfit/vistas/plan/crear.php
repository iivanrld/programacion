<?php
include_once("../plantillas/encabezado.php");

$calcular = new Calcular;
?>
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
        </thead>
        <tbody>
            <tr>
                <th>Categorias por peso (kg)</th>
                <td colspan="5">
                    <ul style="list-style-type: none; padding: 0;">
                        <li>Peso pesado: Ilimitado (mas 100)</li>
                        <li>Peso pesado-ligero: 100</li>
                        <li>Peso medio: 90</li>
                        <li>Peso medio-ligero: 81</li>
                        <li>Peso ligero: 73</li>
                        <li>Peso pluma: 66</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <th>Precios</th>
                <td>Principiante - £25.00</td>
                <td>Intermedio - £30.00</td>
                <td>Elite - £35.00</td>
                <td>Entrenamiento privado - £9.50 por hora</td>
                <td>Competicion - £22.00 por competicion</td>
            </tr>
        </tbody>
    </table>

<div class="container mt-5">
    <h2>Crear plan de entrenamiento</h2>
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

<?php
include_once("../plantillas/footer.php");