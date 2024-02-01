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

// g) Cadena que contenga "aprobado" en minúsculas
$patronAprobadoMinusculas = '/aprobado/';
probarPatron($patronAprobadoMinusculas, 'Este es un texto aprobado');  // Cadena válida
probarPatron($patronAprobadoMinusculas, 'APROBADO123');               // Cadena no válida