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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Nueva Tarea</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        Nueva Tarea
                    </div>
                    <div class="card-body">
                        <form action="controladores/tareasControlador.php" method="post">
                            <div class="form-group">
                                <label for="tarea">Nombre de la tarea:</label>
                                <input type="text" class="form-control" id="tarea" name="tarea" required>
                                <input type="hidden" id="accion" name="accion" value="crear">

                            </div>
                            <div class="form-group">
                                <label for="fecha">Fecha:</label>
                                <input type="date" class="form-control" id="fecha" name="fecha" required>
                            </div>
                            <div class="form-group">
                                <label for="importancia">Importancia:</label>
                                <select class="form-control" id="importancia" name="importancia">
                                    <option value="baja">Baja</option>
                                    <option value="media">Media</option>
                                    <option value="alta">Alta</option>
                                </select>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="terminado" name="terminado" value="1">
                                <label for="terminado" class="form-check-label">Terminado</label>
                            </div>
                            <button type="submit" class="btn btn-primary mt-3">Guardar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>