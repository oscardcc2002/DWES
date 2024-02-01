<?php
class Lagarto extends Animal {
    private $nombre;
    private $especie = "Lagarto";
    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function tomarSol() {
        echo "Lagarto " . $this->getNombre() . ": Estoy tomando el sol<br>" . "\n";
    }

    public function alimentarse($comida = 'insectos') {
        echo "Lagarto " . $this->getNombre() . ": Estoy comiendo $comida<br>" . "\n";
    }
    

    public function dormirse() {
        echo "Lagarto " . $this->getNombre() . ": Zzzzzzz<br>" . "\n";
    }

    public function morirse(){
        self::$totalAnimales--;
        echo "Lagarto " . $this->getNombre() . ": Adiós!<br>" . "\n";
    }
    

    public function __toString() {
        return "Soy un Animal, en concreto un " . $this->especie . ($this->nombre ? ", con sexo " . ($this->sexo == 'M' ? 'MACHO' : 'HEMBRA') . ", llamado $this->nombre" : "") . "<br> \n";
    }

    public static function consSexo($sexo) {
        return new self($sexo);
    }

    public static function consFull($sexo, $nombre) {
        $lagarto = new self($sexo);
        $lagarto->setNombre($nombre);
        return $lagarto;
    }
}
?>