<?php

include_once 'Vehiculo.php';

class Bicicleta extends Vehiculo {
    public function hacerCaballito() {
        echo "¡Haciendo el caballito en la bicicleta!\n";
    }

    public function ponerCadena() {
        echo "Poniendo la cadena en la bicicleta\n";
    }

    public function verKMRecorridos() {
        return "Kilómetros recorridos en la bicicleta: " . $this->kilometrosRecorridos . " km\n";
    }
}
