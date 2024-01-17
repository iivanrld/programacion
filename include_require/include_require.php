<?php
//tanto include come require, sirven para incluir otros archivos en el archivo que esta en ejecucion

/*
las diferencias entre include y require son importantes, aunque minimas ya que sirven para lo mismo
aunque funcionan de manera diferente a la hora de la ejecucion del programa.
*/

/*
include: añade el archivo pero continua con la ejecucion del programa si no existe
o tiene errores, el archivo que queremos cargar.

require: añade el archivo pero no permite la continuacion de la ejecucuion si se produce 
un error de lectura o el archivo contiene algun error.

USO:

include("archivo a cargar");

require("archivo a cargar");

Variante de require:

require_once("archivo a cargar");

carga el archivo solo una vez, si ya esta cargado no lo vuelve a cargar.

*/