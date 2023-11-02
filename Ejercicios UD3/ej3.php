<?php
/** 
 * @author Oscar del Campo
 */

 $segundos = intval(readline("Por favor, ingresa la cantidad de segundos transcurridos desde las 12 de la noche: "));

 $horas = floor($segundos / 3600);
 $minutos = floor(($segundos % 3600) / 60);
 $segundosRestantes = $segundos % 60;
 
 echo "Horas: $horas, Minutos: $minutos, Segundos: $segundosRestantes\n";



 ?>


