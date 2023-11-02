<?php
/** 
 * @author Oscar del Campo
 */

 $positivos = 0;
 $negativos = 0;
 
 echo "Ingresa diez números:\n";
 
 for ($i = 1; $i <= 10; $i++) {
     $numero = readline("Número $i: ");
 
     if ($numero > 0) {
         $positivos++;
     } elseif ($numero < 0) {
         $negativos++;
     }
 }
 

 $porcentajePositivos = ($positivos / 10) * 100;
 $porcentajeNegativos = ($negativos / 10) * 100;
 
 echo "Números positivos: $positivos\n";
 echo "Números negativos: $negativos\n";
 echo "Porcentaje de positivos: $porcentajePositivos%\n";
 echo "Porcentaje de negativos: $porcentajeNegativos%\n";


 ?>