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

// o) URL sencilla
$patronURL = '/^(https?|ftp):\/\/[a-zA-Z0-9-]+\.[a-zA-Z]{2,}(\S*)$/';
probarPatron($patronURL, 'http://www.ieslasenia.org/ejercicio?16');  // Cadena válida
probarPatron($patronURL, 'https:/ieslasenia.org/ejercicio?16'); // Cadena no válida