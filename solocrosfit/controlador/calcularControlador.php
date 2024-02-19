<?php

function calcularCostoTotal($plan, $sesionporsemana, $horasextra, $tasacompeticion) {
    $costos = [
        'beginner' => 25.00,
        'intermediate' => 30.00,
        'elite' => 35.00,
        'privateTuition' => 22.00,
        'competitionEntry' => 9.50
    ];

    $costoPlan = $costos['beginner'];
    switch ($plan) {
        case 'intermediate':
            $costoPlan = $costos['intermediate'];
            break;
        case 'elite':
            $costoPlan = $costos['elite'];
            break;
    }

    $costoSesiones = $costoPlan * $sesionporsemana;
    $costoTuition = $horasextra * $costos['sesion privada'];
    $costoCompetition = $tasacompeticion * $costos['tasa competicion'];

    $costoTotal = $costoSesiones + $costoTuition + $costoCompetition;

    return $costoTotal;

}

