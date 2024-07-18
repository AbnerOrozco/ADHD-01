<?php 
include_once('persona.php');

class Cliente extends Persona {
    public $nit = "";
    

    public function verDatos() {
        return "<br>Nit : " . $this->nit . parent::verDatos();
    }

}
?>