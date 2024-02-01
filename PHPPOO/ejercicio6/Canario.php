<?php
include_once "Ave.php";
class Canario extends Ave {
    private $nombre;
    private $especie = "Ave";

    public function __construct($sexo = 'M', $nombre = null) {
        parent::__construct($sexo);
        $this->nombre = $nombre;
    }

    public function pia() {
        echo "Canario " . $this->getNombre() . ": Pio pio pio<br>" . "\n";
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function alimentarse($comida = 'alpiste') {
        echo "Canario " . $this->getNombre() . ": Estoy comiendo $comida<br>" . "\n";
    }

    public function __toString() {
        return "Soy un Animal, un " . $this->especie . ($this->nombre ? ", en concreto un Canario, con sexo " . ($this->sexo == 'M' ? 'MACHO' : 'HEMBRA') . ", llamado $this->nombre" : "") . "<br> \n";
    }

    public function ponerHuevo(){
        if ($this->sexo == 'H') {
            echo  "Canario " . $this->getNombre() . ": He puesto un huevo!<br>" . "\n";
        } else {
            echo  "Canario " . $this->getNombre() . ": Soy macho, no puedo poner huevos<br>" . "\n";
        }
    }
    
    public static function consSexo($sexo) {
        return new self($sexo);
    }

    public static function consFull($sexo, $nombre) {
        $canario = new self($sexo, $nombre);
        return $canario;
    }
}
?>