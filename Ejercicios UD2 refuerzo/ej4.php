<?php
/** 
 * @author Oscar del Campo
 */

$horas_trabajadas = readline("Ingresa las horas trabajadas: ");

 $tarifa_normal = 12; 
 $tarifa_extra = 16;  
 
 if ($horas_trabajadas <= 40) {
     $salario = $horas_trabajadas * $tarifa_normal;
 } else {
     $salario = 40 * $tarifa_normal + ($horas_trabajadas - 40) * $tarifa_extra;
 }
 
 echo "El salario semanal del trabajador es: $" . $salario . "\n";
?>