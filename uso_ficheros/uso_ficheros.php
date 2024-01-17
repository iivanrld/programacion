<?php
//apertura de ficheros de texto

$archivo = fopen("prueba.txt","w");

//los modos de apertura de los ficheros son

//w: abre el archivo para la escritura desde el principio
//a: abre el archivo para la escritura desde la ultima linea que contenga

//cierre de archivos de texto

//escritura en archivos de texto

fwrite($archivo, "Linea añadida desde codigo al archivo de texto.".PHP_EOL);
fwrite($archivo,"estas es otra linea añadida desde el codigo al archivo de texto".PHP_EOL);
fclose($archivo);