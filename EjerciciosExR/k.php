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

// k) Números con espacios
$patronNumerosConEspacios = '/^\d+(\s\d+)*$/';
probarPatron($patronNumerosConEspacios, '123 456 789');            // Cadena válida
probarPatron($patronNumerosConEspacios, '12a345');                  // Cadena no válida