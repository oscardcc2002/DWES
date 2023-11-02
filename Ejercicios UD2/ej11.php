<?php
/** 
 * @author Oscar del Campo
 */

 $euros = readline("Ingresa la cantidad de euros: ");

 $tipo_cambio = 166.386; // 1 euro = 166.386 pesetas
 $pesetas = $euros * $tipo_cambio;
 
 echo "$euros euros son $pesetas pesetas.\n";

?>