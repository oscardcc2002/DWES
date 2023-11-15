<?php
/**
* @author Óscar del Campo Carpio
*/
$barcos=array("barcoDe4"=>array("tamaño"=>4,"filaInicio"=>0,"columnaInicio"=>0,"direccion"=>0),
"barcoDe3-1"=>array("tamaño"=>3,"filaInicio"=>1,"columnaInicio"=>6,"direccion"=>1),
"barcoDe3-2"=>array("tamaño"=>3,"filaInicio"=>5,"columnaInicio"=>6,"direccion"=>1),
"barcoDe2-1"=>array("tamaño"=>2,"filaInicio"=>5,"columnaInicio"=>4,"direccion"=>0),
"barcoDe2-2"=>array("tamaño"=>2,"filaInicio"=>8,"columnaInicio"=>1,"direccion"=>0),
"barcoDe2-3"=>array("tamaño"=>2,"filaInicio"=>8,"columnaInicio"=>4,"direccion"=>0),
"barcoDe1-1"=>array("tamaño"=>1,"filaInicio"=>8,"columnaInicio"=>8,"direccion"=>0),
"barcoDe1-2"=>array("tamaño"=>1,"filaInicio"=>6,"columnaInicio"=>8,"direccion"=>0),
"barcoDe1-3"=>array("tamaño"=>1,"filaInicio"=>1,"columnaInicio"=>8,"direccion"=>0),
"barcoDe1-4"=>array("tamaño"=>1,"filaInicio"=>5,"columnaInicio"=>5,"direccion"=>0)
);//dirección 0 horizontal, 1 vertical


foreach($barcos as $barco=>$value){
    echo ("El barco ".$barco.":\n");
    echo ("El tamaño es: ".$value["tamaño"]."\t\t");
    echo ("La fila inicial es: ".$value["filaInicio"]."\t\t");
    echo ("La columna inicial es: ".$value["columnaInicio"]."\t");
    echo ("La dirección es: ".$value["direccion"]."\n");
    echo ("\n");
}
?>