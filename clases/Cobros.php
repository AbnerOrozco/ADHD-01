<?php
include_once('Administracion.php');
class Cobros extends Admin {
    public $bonificacionCobro=0;
    public $comisionCobros=0;

    public function calcularSueldoLiquido(){
        $sueldoLiquido = parent::calcularSueldoLiquido()+ $this->bonificacionCobro+$this->comisionCobros;
        return $sueldoLiquido;
    }

    public function verDatos() {

        return parent::verDatos()."<br>bonificacion Cobros: " 
        . $this->bonificacionCobro."<br>comision cobros".$this->comisionCobros;
    }

 
}
?>