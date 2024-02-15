<?php
include_once("../plantillas/encabezado.php");
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
                <td>£25.00</td>
                <td>£30.00</td>
                <td>£35.00</td>
                <td>£9.50 por hora</td>
                <td>£22.00 por competicion</td>
            </tr>
        </tbody>
    </table>

<div class="container mt-5">
    <h2>Añadir Ususario</h2>
    <form action="controladores/usuarioControlador.php" method="POST">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>
        <input type="hidden" id="accion" name="accion" value="crear">

        <label for="plan">Plan de entrenamiento:</label>
        <select id="plan" name="plan" required>
            <option value="">Selecciona una opcion</option>
            <option value="principiante">Principiante</option>
            <option value="intermedio">Intermedio</option>
            <option value="elite">Elite</option>
        </select><br><br>

        <label for="peso">Peso actual (kg):</label>
        <input type="number" id="peso" name="peso" step="0.01" required><br><br>

        <label for="categoria">Categoria por peso:</label>
        <select id="categoria" name="categoria" required>
            <option value="">Selecciona una opcion</option>
            <option value="peso_pesado">Peso pesado (mas 100kg)</option>
            <option value="peso_pesado_ligero">Peso pesado-ligero (100kg)</option>
            <option value="peso_medio">Peso medio (90kg)</option>
            <option value="peso_medio_ligero">Peso medio-ligero (81kg)</option>
            <option value="peso_ligero">Peso ligero (73kg)</option>
            <option value="peso_pluma">Peso pluma (66kg)</option>
        </select><br><br>
        <button type="submit" class="btn btn-primary">Añadir</button>
    </form>
</div>
<?php
include_once("../plantillas/footer.php");

