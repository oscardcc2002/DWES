<?php

trait GeneradorDNI {
    // Función para generar un número aleatorio de 8 cifras y calcular el DNI completo
    public function generarDNI() {
        $numeroDNI = rand(10000000, 99999999);
        $letra = $this->generaLetraDNI($numeroDNI % 23);
        return $numeroDNI . $letra;
    }

    // Función para obtener la letra correspondiente al DNI
    private function generaLetraDNI($idLetra) {
        $letras = 'TRWAGMYFPDXBNJZSQVHLCKE';
        return $letras[$idLetra];
    }
}

?>