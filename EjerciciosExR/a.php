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

// a) Teléfonos fijos de la provincia de Valencia
$patronTelefonoValencia = '/^96[0-9]{7}$/';
probarPatron($patronTelefonoValencia, '961234567');      // Cadena válida
probarPatron($patronTelefonoValencia, '871234567'); 

?>