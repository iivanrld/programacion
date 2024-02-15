<?php

require_once("../modelos/class_calcular.php");

$accion = $_POST['accion'];
$nombre = $POST['nombre'];
$eventos = $_POST['eventos'];
$plan = $_POST['plan'];
$horas_extra = $_POST['horas_extra'];

$calcular = new Calcular();

switch ($accion){
    case "crear":
        if($calcular->calcular($eventos, $plan, $horas_extra)){
            echo "".$costetotal."".PHP_EOL;
            //Deberíamos redirigir de nuevo al usuario al formulario o al index
        }else{
            echo "¡¡¡¡ERROR AL CALCULAR PLAN!!!!!".PHP_EOL;
            //Deberíamos redirigir al usuario hacia la pantalla de error o el mensaje de error y pertimirle que vuelva a introducir losd atos
        }
        break;
}

switch ($accion){
    case "crear":
        if($calcular->insertar($nombre, $eventos, $plan,$horas_extra)){
            echo "PLAN DE ENTRENAMIENTO AÑADIDO CORRECTAMENTE".PHP_EOL;
            //Deberíamos redirigir de nuevo al usuario al formulario o al index
        }else{
            echo "¡¡¡¡ERROR AL AÑADIR PLAN DE ENTRENAMIENTO!!!!!".PHP_EOL;
            //Deberíamos redirigir al usuario hacia la pantalla de error o el mensaje de error y pertimirle que vuelva a introducir losd atos
        }
        break;
}

