<?php


/** 
 * @author Oscar del Campo
 */
$nota = readline("Ingresa una nota entera del 1 al 10: ");

if ($nota >= 0 && $nota <= 10) {
    if ($nota <= 4) {
        $calificacion = "Insuficiente";
    } else if ($nota == 5) {
        $calificacion = "Suficiente";
    } else if ($nota == 6) {
        $calificacion = "Bien";
    } else if ($nota == 7 || $nota == 8) {
        $calificacion = "Notable";
    } else if ($nota == 9 || $nota == 10) {
        $calificacion = "Sobresaliente";
    }

    echo "La nota $nota se corresponde con: $calificacion";
} else {
    echo "Nota fuera de rango. Debe estar entre 0 y 10.";
}
?>
