<?php
abstract class Animal {
    protected static $totalAnimales = 0;
    protected $sexo;

    public function __construct($sexo = 'M') {
        $this->sexo = strtoupper($sexo);
        self::$totalAnimales++;

    }

    public static function getTotalAnimales() {
        return "Hay un total de " . self::$totalAnimales . " animales<br>" . "\n";
    }

    public function dormirse() {
        echo "Zzzzzzz<br>" . "\n";
    }

    public function alimentarse($comida) {
        echo "Estoy comiendo $comida<br>" . "\n";
    }

    public function morirse() {
        self::$totalAnimales--;
        echo "Adiós!<br>" . "\n";
    }

    public function __toString() {
        return "Soy un Animal, con sexo " . ($this->sexo == 'M' ? 'MACHO' : 'HEMBRA');
    }
}

?>