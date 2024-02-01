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

// t) Validar una matrícula de vehículo español
$patronMatriculaEspañola = '/^[0-9]{4}[A-Z]{3}$/';
probarPatron($patronMatriculaEspañola, '1234ABC');      // Cadena válida
probarPatron($patronMatriculaEspañola, 'ABC1234');      // Cadena no válida