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

// l) Texto en blanco, números, mayúsculas/minúsculas y caracteres acentuados
$patronTextoCompleto = '/^[a-zA-Z0-9\sáéíóúÁÉÍÓÚüÜñÑ]+$/';
probarPatron($patronTextoCompleto, 'Hola Mundó 123');           // Cadena válida
probarPatron($patronTextoCompleto, '@HolaMundo123');              // Cadena no válida