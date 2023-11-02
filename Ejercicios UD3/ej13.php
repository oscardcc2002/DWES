<?php
/** 
 * @author Oscar del Campo
 */
function calcularPotencia($base, $exponente) {
    $resultado = 1;
    for ($i = 1; $i <= $exponente; $i++) {
        $resultado *= $base;
    }
    return $resultado;
}

$base = intval(readline("Ingresa el número: "));
$exponente = intval(readline("Ingresa el exponente: "));
$potencia = calcularPotencia($base, $exponente);

echo "$base elevado a la $exponente es igual a $potencia\n";




 ?>