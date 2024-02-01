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

// b) Códigos postales de la Comunidad Valenciana
$patronCodigoPostalValencia = '/^46[0-9]{3}$/';
probarPatron($patronCodigoPostalValencia, '46001');       // Cadena válida
probarPatron($patronCodigoPostalValencia, '43001');       // Cadena no válida

?>