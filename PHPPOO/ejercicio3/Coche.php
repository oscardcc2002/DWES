<?php

include_once 'Vehiculo.php';

class Coche extends Vehiculo {
    public function llenarDeposito() {
        return "Depósito lleno\n";
    }

    public function quemaRueda() {
        echo "¡Quemando rueda con el coche!\n";
    }

    public function verKMRecorridos() {
        return "Kilómetros recorridos en el coche: " . $this->kilometrosRecorridos . " km\n";
    }
}
