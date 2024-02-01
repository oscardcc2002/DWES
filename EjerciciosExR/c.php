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

// c) Teléfonos móviles
$patronTelefonoMovil = '/^[67][0-9]{8}$/';
probarPatron($patronTelefonoMovil, '611234567');          // Cadena válida
probarPatron($patronTelefonoMovil, '551234567');          // Cadena no válida
?>