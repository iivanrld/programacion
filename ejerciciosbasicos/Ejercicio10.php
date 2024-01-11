<?php
//Ejercicio 10: Uso de Switch
//Escribe un programa que solicite al usuario un número del 1 al 7 y muestre el día de la semana correspondiente.

$dia = readline("porfavor introduce un numero del 1 al 7: ");

if ($dia ==1){
    echo "es lunes";
}elseif ($dia ==2){
    echo"es martes";
}elseif ($dia ==3){
    echo"es miercoles";
}elseif ($dia ==4){
    echo "es jueves";
}elseif ($dia ==5){
    echo "es viernes";
}elseif($dia ==6){
    echo "es sabado";
}elseif($dia ==7){;
    echo "es domingo";
}elseif($dia >7){
echo"numero no valido";
}
    
?>