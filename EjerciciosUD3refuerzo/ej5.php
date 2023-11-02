<?php
/** 
 * @author Oscar del Campo
 */

 $combinacionCorrecta = 1234;
 $intentos = 4;
 
 while ($intentos > 0) {
     $combinacion = readline("Introduce la combinación de la caja fuerte: ");
     
     if ($combinacion == $combinacionCorrecta) {
         echo "La caja fuerte se ha abierto correctamente.\n";
         break;
     } else {
         echo "Esa no es la combinación. Intentos restantes: " . --$intentos . "\n";
     }
 }
 
 if ($intentos == 0) {
     echo "Has agotado todos los intentos. La caja fuerte permanecerá cerrada.\n";
 }

 

 ?>