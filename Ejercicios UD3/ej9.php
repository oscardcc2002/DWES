<?php
/** 
 * @author Oscar del Campo
 */

 $numero = rand(1, 15);


 $factorial = 1;

 for ($i = 1; $i <= $numero; $i++) {
     $factorial *= $i;
 }
 

 echo "Número: $numero\n";
 echo "Factorial: $factorial\n";
 


 ?>