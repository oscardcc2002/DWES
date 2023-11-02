<?php
/** 
 * @author Oscar del Campo
 */

 $numeroAlumnos = intval(readline("Ingresa el número de alumnos en la clase: "));

 if ($numeroAlumnos > 0) {
     $notas = array(); //array para almacenar las notas
 
     for ($i = 1; $i <= $numeroAlumnos; $i++) {
         $nota = floatval(readline("Ingresa la nota del alumno $i: "));
         $notas[] = $nota;
     }
 
   
     $suma = array_sum($notas);
     $media = $suma / $numeroAlumnos;
 



     
     $alumnosPorEncimaDeLaMedia = 0;
     foreach ($notas as $nota) {
         if ($nota > $media) {
             $alumnosPorEncimaDeLaMedia++;
         }
     }
 

     echo "La media de la clase es: $media\n";
     echo "Número de alumnos con notas por encima de la media: $alumnosPorEncimaDeLaMedia\n";
 } else {
     echo "Ingresa un número válido de alumnos (mayor que cero).\n";
 }



 ?>