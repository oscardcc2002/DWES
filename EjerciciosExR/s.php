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

// s) Validar una MAC separada por "-"
$patronMACGuion = '/^([0-9A-Fa-f]{2}[-]){5}([0-9A-Fa-f]{2})$/';
probarPatron($patronMACGuion, '00-1A-2B-3C-4D-5E');  // Cadena válida
probarPatron($patronMACGuion, '001A2B3C4D5E');        // Cadena no válida