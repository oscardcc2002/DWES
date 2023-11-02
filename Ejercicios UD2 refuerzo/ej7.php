<?php
/** 
 * @author Oscar del Campo
 */

$numero = readline("Ingresa el numero entero que quieres que te diga su última cifra: ");

$ultima_cifra = $numero % 10;

echo "La última cifra del número $numero es: " . $ultima_cifra . "\n";
?>