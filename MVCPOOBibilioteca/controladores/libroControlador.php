<?php

require_once("../modelos/class_libro.php");
require_once("../modelos/clase_lectores.php");

$accion = $_POST['accion'];
$titulo = $_POST['titulo'];
$autor = $_POST['autor'];
$genero = $_POST['genero'];

$libro =new Libro();

switch ($accion){
    case "crear":
        if($libro->insertar($titulo, $autor, $genero)){
            echo "LIBRO AÑADIDO CORRECTAMENTE".PHP_EOL;
            //Deberíamos redirigir de nuevo al usuario al formulario o al index
        }else{
            echo "¡¡¡¡ERROR AL AÑADIR EL LIBRO!!!!!".PHP_EOL;
            //Deberíamos redirigir al usuario hacia la pantalla de error o el mensaje de error y pertimirle que vuelva a introducir losd atos
        }
        break;
}

$accion = $_POST['idlector'];
$accion = $_POST['nombre'];
$accion = $_POST['apellido'];
$accion = $_POST['fecha_alta'];
$accion = $_POST['fecha_baja'];

$lector = new Lector();

switch ($accion){
    case "crear":
        if($libro->insertar($idlector, $nombre, $apellido, $fecha_alta, $fecha_baja)){
            echo "LIBRO AÑADIDO CORRECTAMENTE".PHP_EOL;
            //Deberíamos redirigir de nuevo al usuario al formulario o al index
        }else{
            echo "¡¡¡¡ERROR AL AÑADIR EL LIBRO!!!!!".PHP_EOL;
            //Deberíamos redirigir al usuario hacia la pantalla de error o el mensaje de error y pertimirle que vuelva a introducir losd atos
        }
        break;
}



?>