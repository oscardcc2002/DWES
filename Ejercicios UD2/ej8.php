<?php
/** 
 * @author Oscar del Campo
 */

 $diaActual = date("d");

 if ($diaActual <= 15) {
     echo "Primera quincena";
 } else {
     echo "Segunda quincena";
 }
 
 
 $dia = readline("Introduce el día actual: ");
 
 if ($dia <= 15) {
     echo "Primera quincena";
 } else {
     echo "Segunda quincena";
    }

?>