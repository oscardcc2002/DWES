<?php
/** 
 * @author Oscar del Campo
 */

 $pesetas = readline("Por favor, ingresa la cantidad de pesetas: ");
 
 $tipo_cambio = 0.006; // 1 peseta = 0.006 euros
 $euros = $pesetas * $tipo_cambio;
 
 echo "$pesetas pesetas son $euros euros.\n";
 

?>