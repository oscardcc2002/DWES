<?php
/** 
 * @author Oscar del Campo
 */

// Crear la matriz de tamaño 5x5
$matriz = array();

for ($n = 0; $n < 5; $n++) {
    for ($m = 0; $m < 5; $m++) {
        $matriz[$n][$m] = $n + $m;
    }
}

// Mostrar el contenido de la matriz
echo "Contenido de la matriz:\n";

for ($n = 0; $n < 5; $n++) {
    for ($m = 0; $m < 5; $m++) {
        echo $matriz[$n][$m] . " ";
    }
    echo "\n";
}


 ?>