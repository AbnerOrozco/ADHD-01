<?php

class persona{ 
   //atributos
   private $nombre="";
   public $apellido="";
   public $telefono="";
   public $direccion="";



   //metodos


   //set
   public function asiganarNombre($valor){
    $this->nombre=$valor;
   }
   //get
   public function verNombre(){
    return $this->nombre;
   }

   public function nombreCompleto(){
    return "El nombre Completo es : <br> " . $this->nombre . " " . $this->apellido;
   }

   public function verDatos(){
    return "<br>El nombre Completo es : <br> " . $this->nombre . " " . $this->apellido. " <br> telefono:<br> "
        .$this->telefono."  <br> Direccion"
        .$this->direccion;
   }




}




?>