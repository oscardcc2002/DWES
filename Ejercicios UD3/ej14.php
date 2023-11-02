<?php
/** 
 * @author Oscar del Campo
 */

 function calcularPotencias($base, $exponente) {
    $potencias = array();
    $sumaPotencias = 0;

    for ($i = 0; $i <= $exponente; $i++) {
        $resultado = pow($base, $i);
        $potencias[$i] = $resultado;
        $sumaPotencias += $resultado;
        echo "$base elevado a la $i es igual a $resultado\n";
    }

    echo "La suma de todas las potencias es igual a $sumaPotencias\n";
    
    return $potencias;
}

$base = intval(readline("Ingresa el número: "));
$exponente = intval(readline("Ingresa el exponente: "));
$potencias = calcularPotencias($base, $exponente);


 ?>