<?php

require_once("../modelos/class_usuario.php");

$accion = $_POST['accion'];
$nombre = $_POST['nombre'];
$plan = $_POST['plan'];
$peso = $_POST['peso'];
$categoria = $_POST['categoria'];

$usuario =new Usuario();

switch ($accion){
    case "crear":
        if($usuario->insertar($nombre, $plan, $peso, $categoria)){
            echo "USUARIO AÑADIDO CORRECTAMENTE".PHP_EOL;
            //Deberíamos redirigir de nuevo al usuario al formulario o al index
        }else{
            echo "¡¡¡¡ERROR AL AÑADIR AL USUARIO!!!!!".PHP_EOL;
            //Deberíamos redirigir al usuario hacia la pantalla de error o el mensaje de error y pertimirle que vuelva a introducir losd atos
        }
        break;
}

