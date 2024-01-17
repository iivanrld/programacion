<?php
//apertura de ficheros de texto

$archivo = fopen("prueba.txt","w");

//los modos de apertura de los ficheros son

//w: abre el archivo para la escritura desde el principio
//a: abre el archivo para la escritura desde la ultima linea que contenga
//r: abre el archivo para la lectura

//cierre de archivos de texto

//escritura en archivos de texto

fwrite($archivo, "Linea añadida desde codigo al archivo de texto.".PHP_EOL);
fwrite($archivo,"estas es otra linea añadida desde el codigo al archivo de texto".PHP_EOL);
fclose($archivo);

//lectura de archivos de texto
$archivo = fopen("prueba.txt","a");

while (feof($archivo)) {
    $linea = fgets($archivo);
    echo $linea;
}

fclose($archivo);

//mejora de la lectura mediante la comprobacion de existencia de ficheros
echo PHP_EOL."************Segunda lectura con comprobacion**********";

$nombre_archivo = "prueba.txt";

if (file_exists($nombre_archivo)){
    $archivo = fopen($nombre_archivo, "r");

    while (feof($archivo)) {
        $linea = fgets($archivo);
        echo $linea;
    }
    fclose($archivo);
}

