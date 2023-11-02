<?php
/** 
 * @author Oscar del Campo
 */


 
$numero = rand(1, 20);


$sumatorio = 0;


for ($i = 1; $i <= $numero; $i++) {
    $sumatorio += $i;
}


echo "Número: $numero\n";
echo "Sumatorio: $sumatorio\n";



 ?>