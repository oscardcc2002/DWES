<?php

/** 
 * @author Oscar del Campo
 */

$altura = 5; // Altura de la pirámide

for ($i = 1; $i <= $altura; $i++) {
    echo str_repeat("*", 1);
    if ($i > 1) {
        echo str_repeat(" ", $i - 2) . "*";
    }
    echo "\n";
}

?>