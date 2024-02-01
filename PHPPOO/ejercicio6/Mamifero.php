<?php
include_once "Animal.php";

abstract class Mamifero extends Animal {
    protected static $totalMamiferos = 0;

    public function __construct($sexo = 'M') {
        parent::__construct($sexo);
        self::$totalMamiferos++;
    }

    public static function getTotalMamiferos() {
        return "Hay un total de " . self::$totalMamiferos . " mamíferos<br>" . "\n";
    }

    public function amamantar() {
        echo "Amamantando a mis crías<br>" . "\n";
    }

    public function __toString() {
        return parent::__toString() . ", un Mamífero" . "\n";
    }
    
}
?>