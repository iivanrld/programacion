<?php
session_start();

if(!isset($_SESSION['usuario'])){
    header("location: ../../tareas.php");
    die();
}

?>

<div class="container mt-5">
    <h1>Bienvenido <?php echo $_SESSION['usuario']; ?></h1>
</div>

<div class="card w-75">
  <div class="card-body">
    <h5 class="card-title">Crear tarea</h5>
    <p class="card-text">Aqui podras crear una tarea</p>
    <a href="vistas/tareas/crear.php" class="btn btn-primary">Crear Tareas</a>
  </div>
</div>
<div class="card w-75">
  <div class="card-body">
    <h5 class="card-title">Var Tareas</h5>
    <p class="card-text">Aqui podras var tus tareas</p>
    <a href="vistas/tareas/ver.php" class="btn btn-primary">Ver Tareas</a>
  </div>
</div>
<div class="card w-75">
  <div class="card-body">
    <h5 class="card-title">Modificar Tarea</h5>
    <p class="card-text">Aqui podras modificar una tarea</p>
    <a href="vistas/tareas/modificar.php" class="btn btn-primary">Modificar Tareas</a>
  </div>
</div>
<div class="card w-75">
  <div class="card-body">
    <h5 class="card-title">Eliminar tarea</h5>
    <p class="card-text">Aqui podras eliminar una tarea</p>
    <a href="vistas/tareas/eliminar.php" class="btn btn-primary">Eliminar Tareas</a>
  </div>
</div>