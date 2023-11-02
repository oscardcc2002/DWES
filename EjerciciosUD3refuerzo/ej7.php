<?php
/** 
 * @author Oscar del Campo
 */


$numero = array();
for ($i = 0; $i < 20; $i++) {
    $numero[] = rand(0, 100);
}


$cuadrado = array();
$cubo = array();

// Calcula y almacena los cuadrados y cubos
foreach ($numero as $valor) {
    $cuadrado[] = $valor * $valor;
    $cubo[] = $valor * $valor * $valor;
}

// Muestra los tres arrays en tres columnas
echo "Número\ Cuadrado\ Cubo\n";
for ($i = 0; $i < 20; $i++) {
    echo $numero[$i] . "      " . $cuadrado[$i] . "       " . $cubo[$i] . "\n";
}


 
 ?>