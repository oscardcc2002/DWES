<?php
/** 
 * @author Oscar del Campo
 */

 $numero = readline("Ingresa el numero que quieres que te diga si es par y/o divisible entre 5: ");


 if ($numero % 2 == 0) {
     echo "El número es par.\n";
 }
 else{
    echo "El número no es par.\n";
 }
 
 if ($numero % 5 == 0) {
     echo "El número es divisible entre 5.\n";
 }
 else{
    echo "El número no es divisible entre 5.\n";
 }

?>