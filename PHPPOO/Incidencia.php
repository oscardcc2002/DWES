<?php
//Óscar del Campo Carpio

class Incidencia {

    
    private $codigo;
    private $puesto;
    private $descripcion;
    private $estado;

    private static $pendientes = 0;

    public function __construct($puesto, $descripcion) {
        $this->codigo = self::$pendientes + 1;
        $this->puesto = $puesto;
        $this->descripcion = $descripcion;
        $this->estado = "Pendiente ";
        self::$pendientes++;
    }

    public function resuelve($solucion) {
        $this->estado = "Resuelta";
        $this->descripcion .= " - " . $solucion;
        self::$pendientes--;
    }

    public function __toString() {
        return "Incidencia {$this->codigo} - Puesto: {$this->puesto} - {$this->descripcion} - {$this->estado}<br> \n";
    }

    public static function getPendientes() {
        return self::$pendientes;
    }
}
