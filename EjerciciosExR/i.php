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

// i) Letras mayúsculas/minúsculas y espacios
$patronLetrasEspacios = '/^[a-zA-Z\s]+$/';
probarPatron($patronLetrasEspacios, 'Hola Mundo');                   // Cadena válida
probarPatron($patronLetrasEspacios, 'Hola123Mundo');                // Cadena no válida