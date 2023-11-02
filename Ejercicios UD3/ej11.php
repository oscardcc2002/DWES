<?php
/** 
 * @author Oscar del Campo
 */

 
$N = intval(readline("Ingresa un número N: "));

if ($N > 0) {
    echo "Números impares menores que $N:\n";
    for ($i = 1; $i < $N; $i += 2) {
        echo $i . "\n";
    }
} else {
    echo "Ingresa un número válido mayor que cero.\n";
}



 ?>