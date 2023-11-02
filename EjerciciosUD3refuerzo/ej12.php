<?php
/** 
 * @author Oscar del Campo
 */

 $numeros = array();
 $suma = 0;
 $contador = 0;
 
 // Pedir números hasta que la suma alcance o iguale a 1000
 while ($suma < 1000) {
     $numero = floatval(readline("Introduce un número: "));
     $numeros[] = $numero;
     $suma += $numero;
     $contador++;
 }
 
 // Calcular la media
 $media = $suma / $contador;
 
 // Mostrar los resultados
 echo "Números introducidos: " . implode(', ', $numeros) . "\n"; //el implode te muestra los resultados del array convirtiéndolo en un string y añadiendo una coma entre ellos 
 echo "Cantidad de números: " . $contador . "\n";
 echo "Total de la suma: " . $suma . "\n";
 echo "Media de los números: " . $media . "\n";
 
 ?>