<?php

class Vehiculo {
    public static $vehiculosCreados = 0;
    public static $kilometrosTotales = 0;

    protected $kilometrosRecorridos = 0;

    public function __construct() {
        self::$vehiculosCreados++;
    }

    public function avanza($km) {
        $this->kilometrosRecorridos += $km;
        self::$kilometrosTotales += $km;
    }

    public function verKMRecorridos() {
        return "Kilómetros recorridos: " . $this->kilometrosRecorridos . " km\n";
    }

    public static function verKMTotales() {
        return "Kilómetros totales: " . self::$kilometrosTotales . " km\n";
    }

    public static function verVehiculosCreados() {
        return "Número de vehículos creados: " . self::$vehiculosCreados . "\n";
    }
}
