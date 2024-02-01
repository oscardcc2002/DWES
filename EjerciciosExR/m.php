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

// m) Texto con signos de puntuación
$patronTextoPuntuacion = '/^[a-zA-Z0-9\sáéíóúÁÉÍÓÚüÜñÑ\'?¿¡!",.;:-]+$/';
probarPatron($patronTextoPuntuacion, '¡Hola Mundo! 123');         // Cadena válida
probarPatron($patronTextoPuntuacion, '@HolaMundo123');            // Cadena no válida