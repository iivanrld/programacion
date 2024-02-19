<!DOCTYPE html>
<html>
  <head>
    <title></title>
    <style>
      .button {
        display: inline-block;
        padding: 10px 20px;
        margin: 10px;
        border-radius: 5px;
        text-decoration: none;
        color: #fff;
        background-color: #007bff;
      }
      .button:hover {
        background-color: #0062cc;
      }
    </style>
  </head>
  <!-- aqui tenemos dos botones, uno que nos lleva a crear, ver, actualizar y eliminar usuarios -->
  <!-- y el otro que nos da la opcion de crear un plan de entrenamiento para calcularlo -->
  <body>
    <a href="vistas/usuarios/usuarios.php" class="button">Usuarios</a>
    <a href="vistas/plan/calcalur_plan.php" class="button">Calcular plan de entrenamiento</a>
  </body>
</html>