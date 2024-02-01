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

// p) Contraseña con al menos un carácter en minúscula, una mayúscula, un número y al menos 6 caracteres de longitud
$patronContrasena = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{6,}$/';
probarPatron($patronContrasena, 'Abc123');                        // Cadena válida
probarPatron($patronContrasena, 'abc');                          // Cadena no válida