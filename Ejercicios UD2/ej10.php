<?php
/** 
 * @author Oscar del Campo
 */

 $num_aleatorio = rand(1, 5);

 $numeros_en_letras = ["uno", "dos", "tres", "cuatro", "cinco"];
 
 echo $num_aleatorio . " - " . $numeros_en_letras[$num_aleatorio - 1] . "\n";

 // Accedo al array $numeros_en_letras utilizando el valor de $num_aleatorio como índice (restando 1 para ajustar el índice al rango del array).

?>