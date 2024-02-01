<?php
/*
Óscar del Campo Carpio
*/
// Función para probar patrones
function probarPatron($patron, $cadena) {
    if (preg_match($patron, $cadena)) {
        echo "La cadena '$cadena' coincide con el patrón.\n";
    } else {
        echo "La cadena '$cadena' no coincide con el patrón.\n";
    }
}
// j) Solo números, sin espacios
$patronSoloNumeros = '/^\d+$/';
probarPatron($patronSoloNumeros, '12345');                         // Cadena válida
probarPatron($patronSoloNumeros, '12 345');                        // Cadena no válida
