<?php
/** 
 * @author Oscar del Campo
 */


$numero = readline("Ingresa un número entero: ");


$longitud = strlen((string)$numero);


//si el total del número de las cifras del número es un número par quiere decir que hay dos números en el centro y si hay un número impar de cifras quiere decir que va a haber un número en el centro
if ($longitud % 2 == 0) {
  
    $mitad = $longitud / 2;
    $cifras = substr($numero, $mitad - 1, 2);
    echo "Las cifras en el centro son $cifras.\n";
} else {
  
    $mitad = ($longitud - 1) / 2;
    $cifra = substr($numero, $mitad, 1);
    echo "La cifra en el centro es $cifra.\n";
}


 ?>