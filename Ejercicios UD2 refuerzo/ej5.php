<?php
/** 
 * @author Oscar del Campo
 */

 $a = readline("Ingresa el valor de la x: ");
 $b = readline("Ingresa el segundo número: ");


if ($a == 0) {
    echo "La ecuación no es válida.";
} else {
    $solucion = -$b / $a;
    echo "La solución de la ecuación {$a}x + {$b} = 0 es x = {$solucion}.\n";
}

?>