<?php
/** 
 * @author Oscar del Campo
 */


 
$hora = readline("Por favor, ingresa una hora en el formato HH:MM:SS: ");

$formatoValido = preg_match('/^([0-1]?[0-9]|2[0-3]):[0-5][0-9]:[0-5][0-9]$/', $hora);

if ($formatoValido) {
    echo "La hora ingresada está en el formato correcto.\n";
} else {
    echo "La hora ingresada no está en el formato correcto.\n";
}




 ?>