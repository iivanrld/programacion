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
        <label for="usuario">Usuario:</label>
        <?php echo $usuario->get_selectusuario();?>
    </form>
</div>

<div class="container mt-5">
    <?php echo $usuario->tablaUsuarios(); ?>;
</div>

<?php
include_once("../plantillas/footer.php");