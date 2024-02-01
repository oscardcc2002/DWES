<?php
class Pinguino extends Ave {
    private $nombre;


    public function __construct($sexo = 'M', $nombre = null) {
        parent::__construct($sexo);
        $this->nombre = $nombre;
    }

    public function pia() {
        echo "Pingüino " . $this->getNombre(). ": Soy un pingüino programador en PHP<br>" . "\n";
    }

    public function alimentarse($comida = 'peces') {
        echo "Pingüino " . $this->getNombre() . ": Estoy comiendo $comida<br>" . "\n";
    }

    public function programar() {
        echo "Pingüino " . $this->getNombre(). ": Soy un pingüino programandor en PHP<br>" . "\n";
    }
    public static function consSexo($sexo) {
        return new self($sexo);
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function __toString() {
        if ($this->nombre) {
            return "Soy un Animal, un ave, en concreto un Pingüino, con sexo " . ($this->sexo == 'M' ? 'MACHO' : 'HEMBRA') . ", llamado $this->nombre<br> \n";
        } else {
            return "Soy un Animal, un ave, en concreto un Pingüino, con sexo " . ($this->sexo == 'M' ? 'MACHO' : 'HEMBRA') . "<br> \n";
        }
     }

    public static function consFull($sexo, $nombre) {
        $pinguino = new self($sexo, $nombre);
        return $pinguino;
    }

    public function dormirse() {
        echo "Pingüino " . $this->getNombre() . ": Zzzzzzz<br>" . "\n";
    }

    public function ponerHuevo(){
        if ($this->sexo == 'H') {
            echo  "Pingüino " . $this->getNombre() . ": He puesto un huevo!<br>" . "\n";
        } else {
            echo  "Pingüino " . $this->getNombre() . ": Soy macho, no puedo poner huevos<br>" . "\n";
        }
    }

    public function morirse(){
        self::$totalAnimales--;
        self::$totalAves--;

        echo "Pingüino " . $this->getNombre() . ": Adiós!<br>" . "\n";
    }
}
?>