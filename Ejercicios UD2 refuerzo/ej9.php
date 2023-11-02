<?php
/** 
 * @author Oscar del Campo
 */

 $numero = readline("Ingresa el numero entero que quieres que te diga si es capicúa: ");


 if ($numero < 0 || $numero >= 100000) {
     echo "El número no es válido (debe tener hasta 5 cifras positivas).\n";
 } elseif ($numero == strrev($numero)) {
     echo "El número es capicúa.\n";
 } else {
     echo "El número no es capicúa.\n";
 }


?>