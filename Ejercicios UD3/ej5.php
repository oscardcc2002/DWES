<?php
/** 
 * @author Oscar del Campo
 */

 $tiempoLlamada = readline("Ingresa la duración de la llamada en minutos: ");

 if ($tiempoLlamada < 3) {
     $costo = 10; // Llamadas de menos de 3 minutos cuestan 10 céntimos.
 } else {
     $costo = 10 + ($tiempoLlamada - 3) * 5; // Llamadas de más de 3 minutos tienen un costo adicional de 5 céntimos por minuto.
 }
 
 echo "La llamada ha costado $costo céntimos.\n";
 



?>