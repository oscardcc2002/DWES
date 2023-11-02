<?php
/** 
 * @author Oscar del Campo
 */
$numero = readline("Ingresa el numero entero que quieres que te diga su primera cifra, debe ser de cimco cifras o menos: ");

$longitud = strlen($numero);

if ($longitud <= 5) {
    $primera_cifra = (int) substr($numero, 0, 1);
    echo "La primera cifra del número es: " . $primera_cifra . "\n";
} else {
    echo "El número tiene más de 5 cifras, no se puede procesar.\n";
}

?>