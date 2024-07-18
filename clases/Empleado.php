<?php
include_once('Persona.php');
class Empleado extends Persona{
    public $codigo=0;
    public $nivelesAcademicos="";
    public $sueldoBase=0;
    private $bonificacion=350;
    private $igss=0;
 

    public function calcularSueldoLiquido(){
        $this->igss = $this->sueldoBase * 4.83/100;
        $sueldoLiquido = $this->sueldoBase +$this->bonificacion -$this->igss;
        return  $sueldoLiquido;
    }
    public function verDatos(){
      return "codigo de empleado: ". $this->codigo
        .parent::verDatos()
        ."<br> nivel academico: <br>". $this->nivelesAcademicos
        ."<br>  sueldo base: " .$this->sueldoBase 
        ."<br> bonificacion: ".$this->bonificacion
        ."<br> Igss : ".$this->igss;
        
    }
}





?>