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

// r) Validar una MAC separada por ":"
$patronMACColon = '/^([0-9A-Fa-f]{2}[:-]){5}([0-9A-Fa-f]{2})$/';
probarPatron($patronMACColon, '00:1A:2B:3C:4D:5E');  // Cadena válida
probarPatron($patronMACColon, '001A2B3C4D5E');       // Cadena no válida