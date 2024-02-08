<?php

//include_once("../plantillas/cabeceras.php");

//Definamos el body de mi página html
?>

<div class="container mt-5">
    <h2>Añadir libro</h2>
    <form action="controladores/libroControlador.php" method="POST" class="form">
        <div class="mb-3">
            <label for="titulo" class="form-label">Título</label>
            <input type="text" class="form-control" id="titulo" name="titulo" required>
            <input type="hidden" id="accion" name="accion" value="crear">
        </div>
        <div class="mb-3">
            <label for="autor" class="form-label">Autor</label>
            <input type="text" class="form-control" id="autor" name="autor" required>
        </div>
        <div class="mb-3">
            <label for="genero" class="form-label">Género</label>
            <input type="text" class="form-control" id="genero" name="genero" required>
        </div>
        <button type="submit" class="btn btn-primary">Añadir</button>
    </form>
</div>
<div class="container mt-5">
    <h2>Añadir lector</h2>
    <form action="controladores/libroControlador.php" method="POST" class="form">
        <div class="mb-3">
            <label for="titulo" class="form-label">id_lector</label>
            <input type="text" class="form-control" id="idlector" name="idlector" required>
            <input type="hidden" id="accion" name="accion" value="crear">
        </div>
        <div class="mb-3">
            <label for="autor" class="form-label">nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" required>
        </div>
        <div class="mb-3">
            <label for="autor" class="form-label">apellido</label>
            <input type="text" class="form-control" id="apellido" name="apellido" required>
        </div>
        <div class="mb-3">
            <label for="autor" class="form-label">fecha_alta</label>
            <input type="text" class="form-control" id="fecha_alta" name="fecha_alta" required>
        </div>
        <div class="mb-3">
            <label for="autor" class="form-label">fecha_baja</label>
            <input type="text" class="form-control" id="fecha_baja" name="fecha_baja" required>
        </div>
        <button type="submit" class="btn btn-primary">Añadir</button>
    </form>
</div>
<?php
//Fin del body de mi página html
//include_once("../plantillas/footer.php");


?>