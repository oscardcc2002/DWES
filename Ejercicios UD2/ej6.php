<?php
/** 
 * @author Oscar del Campo
 */

 $numeros = [];
 $cantidad = readline("Introduce la cantidad de números a introducir: ");
 
 for ($i = 0; $i < $cantidad; $i++) {
     $numeros[] = readline("Introduce el número $i: ");
 }
 
 $media = array_sum($numeros) / $cantidad;
 $mediaRedondeada = round($media, 2);
 
 echo "Los números introducidos son: " . implode(", ", $numeros);
 echo "\n";
 echo "La media redondeada es $mediaRedondeada";

?>