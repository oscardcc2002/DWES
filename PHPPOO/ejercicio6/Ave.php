<?php
include_once "Animal.php";

abstract class Ave extends Animal {
    protected static $totalAves = 0;

    public function __construct($sexo = 'M') {
        parent::__construct($sexo);
        self::$totalAves++;
    }

    public static function getTotalAves() {
        return "Hay un total de " . self::$totalAves . " aves<br>" . "\n";
    }

    public function ponerHuevo() {

    }

    public function __toString() {
        return parent::__toString() . ", un Ave" . "\n";
    }

    public function morirse(){
        self::$totalAnimales--;
        self::$totalAves--;

       
    }
}
?>