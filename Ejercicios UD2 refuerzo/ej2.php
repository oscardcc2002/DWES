<?php
/** 
 * @author Oscar del Campo
 */

 $altura = 5; // Altura de la pirámide

for ($i = 1; $i <= $altura; $i++) {
    echo str_repeat("*", 2 * $i - 1) . "\n";
}

?>