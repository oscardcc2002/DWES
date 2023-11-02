<?php
/** 
 * @author Oscar del Campo
 */
$datos = array(
    'pares' => array(),
    'impares' => array()
);


for ($i = 1; $i <= 8; $i++) {
    $numero = intval(readline("Ingresa el número $i: "));
    
    if ($numero % 2 === 0) {
        $datos['pares'][] = $numero;
    } else {
        $datos['impares'][] = $numero;
    }
}
//Contar números pares 
$cantidadPares = count($datos['pares']);
//Contar números impares
$cantidadImpares = count($datos['impares']);
$totalNumeros = $cantidadPares + $cantidadImpares;
//Calcular los dos porcentajes
$porcentajePares = ($cantidadPares / $totalNumeros) * 100;
$porcentajeImpares = ($cantidadImpares / $totalNumeros) * 100;

//Mediante el implode separamos con una coma la cadena pares que lo convertimos en un String
echo "Números pares: " . implode(", ", $datos['pares']);
echo "\n"; 
echo "Números impares: " . implode(", ", $datos['impares']);
echo "\n";
echo "Cantidad de números pares: $cantidadPares";
echo "\n";
echo "Cantidad de números impares: $cantidadImpares";
echo "\n";
echo "Porcentaje de números pares: $porcentajePares%";
echo "\n";
echo "Porcentaje de números impares: $porcentajeImpares%"; 
 

 ?>