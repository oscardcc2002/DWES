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

// f) Cadena que sea "aprobado"
$patronAprobado = '/^aprobado$/i';
probarPatron($patronAprobado, 'APROBADO');               // Cadena válida
probarPatron($patronAprobado, 'Aprobado123');            // Cadena no válida