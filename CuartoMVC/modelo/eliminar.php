<?php
function eliminarDatosPorNombre($nombre, &$datos) {
    $indice = -1;

    // Buscamos el índice del nombre en el array de datos
    foreach ($datos as $key => $dato) {
        if ($dato['nombre'] == $nombre) {
            $indice = $key;
            break;
        }
    }

    // Si encontramos el nombre, eliminamos los datos asociados a ese nombre
    if ($indice != -1) {
        unset($datos[$indice]);
        return true;
    } else {
        return false;
    }
}