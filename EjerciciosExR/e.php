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

//e) Fecha en formato dd/mm/aaaa o dd-mm-aaaa
$patronFecha = '/^(0[1-9]|[12][0-9]|3[01])[-\/](0[1-9]|1[0-2])[-\/]\d{4}$/';
probarPatron($patronFecha, '12/01/2022');                // Cadena válida
probarPatron($patronFecha, '2022-01-12');                // Cadena no válida