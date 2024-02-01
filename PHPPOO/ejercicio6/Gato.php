<?php
class Gato extends Mamifero {
    private $nombre;
    private $raza;

    public function __construct($sexo = 'M', $nombre = null, $raza = null) {
        parent::__construct($sexo);
        $this->nombre = $nombre;
        $this->raza = $raza;
    }
    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function setRaza($raza) {
        $this->raza = $raza;
    }

    public function getRaza() {
        return $this->raza;
    }

    public function maulla() {
        echo "Gato " . $this->getNombre() . ": Miauuuu<br>" . "\n";
    }

    public function alimentarse($comida = 'pescado') {
        echo "Gato " . $this->getNombre() . ": Estoy comiendo $comida<br>" . "\n";
    }

    public function __toString() {
        $sexoStr = $this->sexo == 'M' ? 'MACHO' : 'HEMBRA';
        $nombreStr = $this->nombre ? ", y mi nombre es " . $this->getNombre() : " y no tengo nombre";
        $razaStr = $this->raza ? ", raza " . $this->getRaza() : "";
        
        return "Soy un Animal, un Mamífero, en concreto un Gato, con sexo $sexoStr$razaStr$nombreStr<br>\n";
        }

    public static function consSexoNombre($sexo, $nombre) {
        return new self($sexo, $nombre);
    }

    public static function consFull($sexo, $nombre, $raza) {
        $gato = new self($sexo, $nombre, $raza);
        return $gato;
    }

    public function dormirse() {
        echo "Gato " . $this->getNombre() . ": Zzzzzzz<br>" . "\n";
    }

    public function amamantar(){
        if ($this->sexo == 'H') {
            echo "Gato " . $this->getNombre() . ": Amamantando a mis crías<br>" . "\n";
        } else {
            echo "Gato " . $this->getNombre() . ": Soy macho, no puedo amamantar<br>" . "\n";
        }
    }

    public function morirse(){
        self::$totalAnimales--;
        self::$totalMamiferos--;

        echo "Gato " . $this->getNombre() . ": Adiós!<br>" . "\n";
    }
}
?>