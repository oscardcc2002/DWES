<?php
/** 
 * @author Oscar del Campo
 */



$numero = readline("Ingresa un número entero: ");


$numCadena = (string)$numero;
//con el strlen calculamos la longitud de la cadena
$numDigitos = strlen($numCadena);


echo "El número $numero tiene $numDigitos dígito(s).\n";


 ?>
