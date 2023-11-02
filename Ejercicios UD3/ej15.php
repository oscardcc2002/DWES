<?php
/** 
 * @author Oscar del Campo
 */


function permutaciones(&$vector) {
    $n = count($vector);
    for ($i = 0; $i < $n / 2; $i++) {
        $temp = $vector[$i];
        $vector[$i] = $vector[$n - $i - 1];
        $vector[$n - $i - 1] = $temp;
    }
}


$miVector = array(1, 2, 3, 4, 5);
permutaciones($miVector);
print_r($miVector);
?>