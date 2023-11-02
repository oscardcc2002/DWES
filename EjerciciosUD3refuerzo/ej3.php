<?php
/** 
 * @author Oscar del Campo
 */

$notas = array();
for ($i = 1; $i <= 7; $i++) {
    $nota = readline("Ingresa la nota $i: ");
    $notas[] = (float)$nota; //Ya que puede tener decimales añadimos el float
}

$suma = array_sum($notas);
$media = $suma / count($notas);

if ($media >= 0 && $media <= 10) {
    if ($media >= 0 && $media < 5) {
        $calificacion = "Insuficiente";
    } elseif ($media >= 5 && $media < 6) {
        $calificacion = "Suficiente";
    } elseif ($media >= 6 && $media < 7) {
        $calificacion = "Bien";
    } elseif ($media >= 7 && $media < 9) {
        $calificacion = "Notable";
    } elseif ($media >= 9 && $media <= 10) {
        $calificacion = "Sobresaliente";
    } else {
        echo "Media fuera de rango. Debe estar entre 0 y 10.";
        exit;
    }
    
    echo "La media $media se corresponde con: $calificacion";
} else {
    echo "Media fuera de rango. Debe estar entre 0 y 10.";
}
?>
