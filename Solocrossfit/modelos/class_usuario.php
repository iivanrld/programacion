<?php

class Usuario {
    private $cursor;
    private $usuario;
    private $selectusuario;

    public function __construct() {
        $this->cursor = (new Conexion())->get_conexion();
        $this->selectusuario = $this->usuario->get_selectusuario();
    }

    public function insertar($nombre, $plan, $peso, $categoria) {

        $sql = $this->cursor->prepare("INSERT INTO usuarios (nombre, plan, peso, categoria) VALUES (?,?,?,?,?)");
        $sql->bind_param("sssss", $nombre, $plan, $peso, $categoria); //Las sssss son porque todos los valores son de tipo string

        if($sql->execute()){
            return true;
        }else{
            return false;
        }
    }

    public function selectUsuarios(){
        //Esta función devolverá un select con los datos de los usuarios

        $html = "<SELECT name='usuario'>";

        $sql = "SELECT * FROM usuarios where nombre= nombre";

        $resultado = $this->cursor->query($sql);

        if($resultado->num_rows > 0){
            while ($usuario = $resultado->fetch_array()) {
                $html .= '<option value="'.$usuario['nombre'].'">'.$usuario['plan'].' '.$usuario['peso'].' '.$usuario['categoria'].'</option>';
             }
        }
        $html .= "</SELECT>";

        return $html;
    }

    public function get_selectusuario(){
        return $this->selectusuario;
    }

    public function tablaUsuarios(){

        $html = '<TABLE>';
        $html .= '<th><td>Nombre</td><td>Plan</td><td>Peso</td><td>Categoria</td></th>';

        $sql = "SELECT * FROM usuarios" ;

        $resultado = $this->cursor->query($sql);
        
        if($resultado->num_rows > 0){
            while ($usuario = $resultado->fetch_assoc()) {
                $html .= '<tr><td>'.$usuario['nombre'].'</td><td>'.$usuario['plan'].'</td><td>'.$usuario['peso'].'</td><td>'.$usuario['categoria'].'</td></tr>';
             }
        }

        $html .= "</TABLE>";
    }

}