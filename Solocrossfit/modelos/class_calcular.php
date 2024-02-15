<?php

class Calcular {

    private $cursor;

    public function __construct() {
        $this->cursor = (new Conexion())->get_conexion();
    }

    public function insertar($nombre, $eventos, $plan, $horas_extra) {

        $sql = $this->cursor->prepare("INSERT INTO plan_entrenamiento (nombre, eventos, plan, horas_extra) VALUES (?,?,?,?)");
        $sql->bind_param("ssss",$nombre, $eventos, $plan, $horas_extra); //Las sss son porque todos los valores son de tipo string

        if($sql->execute()){
            return true;
        }else{
            return false;
        }
    }

    public function calcular($eventos, $plan, $horas_extra) {
            $coste_entreno_privado = 9.50;
            $coste_competicion = 22.00;
        
            $precio_plan = 0;
        
            switch ($plan) {
                case 'Principiante':
                    $precio_plan = 25.00;
                    break;
                case 'Intermedio':
                    $precio_plan = 30.00;
                    break;
                case 'Elite':
                    $precio_plan = 35.00;
                    break;
                }
        
         $coste_total = 0;
        
            // Calcular coste de entrenamiento privado
            if (strpos($eventos, 'Entrenamiento privado') !== false) {
             $coste_total += $coste_entreno_privado * $horas_extra;
            }
        
            // Calcular coste de competición
            if (strpos($eventos, 'Competicion') !== false) {
                $num_competiciones = substr_count($eventos, 'Competicion');
                $coste_total += $coste_competicion * $num_competiciones;
            }
        
            // Calcular coste del plan de entrenamiento
            $coste_total += $precio_plan;
        
            return $coste_total;
        }

    
}
