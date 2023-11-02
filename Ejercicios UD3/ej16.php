<?php
/** 
 * @author Oscar del Campo
 */


// Lee los valores de 'a' y 'b' desde el usuario
$a = readline("Ingresa el valor de 'a': ");
$b = readline("Ingresa el valor de 'b': ");


if ($a == 0) {
    echo "La ecuación no tiene una solución única, ya que 'a' no puede ser igual a 0.\n";
} else {
   
    $x = $b / $a;

   
    echo "El valor de 'x' mediante la ecuación 2($a x - $b) = 0 es x = $x\n";
}




 ?>