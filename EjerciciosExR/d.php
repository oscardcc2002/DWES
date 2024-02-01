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

// d) NIF
$patronNIF = '/^[0-9]{8}[A-Za-z]$/';
probarPatron($patronNIF, '12345678Z');                   // Cadena válida
probarPatron($patronNIF, '12345A78A');                   // Cadena no válida