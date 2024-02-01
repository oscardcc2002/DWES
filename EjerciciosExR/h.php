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
// h) Cadena que contenga "aprobado" tanto en mayúsculas como en minúsculas
$patronAprobadoMixto = '/[aA][pP][rR][oO][bB][aA][dD][oO]/';
probarPatron($patronAprobadoMixto, 'Este es un texto APROBADO');      // Cadena válida
probarPatron($patronAprobadoMixto, 'Aprobado123');                   // Cadena no válida