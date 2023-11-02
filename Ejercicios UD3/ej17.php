<?php
/** 
 * @author Oscar del Campo
 */


 $numero = readline("Ingresa un número: ");

 
 $esPar = $numero % 2 == 0;
 $esDivisiblePor3 = $numero % 3 == 0;
 
 if ($esPar && $esDivisiblePor3) {
     echo "El número $numero es par y divisible por 3.\n";
 } elseif ($esPar) {
     echo "El número $numero es par pero no es divisible por 3.\n";
 } elseif ($esDivisiblePor3) {
     echo "El número $numero no es par pero es divisible por 3.\n";
 } else {
     echo "El número $numero no es ni par ni divisible por 3.\n";
 }
 

 ?>