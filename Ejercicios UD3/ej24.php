<?php
/** 
 * @author Oscar del Campo
 */


$numeroTrabajadores = readline("Dime el número de trabajadores que deseas ingresar: " );
$trabajadores = array();


for ($i = 1; $i <= $numeroTrabajadores; $i++) {
    $nombre = readline("Ingresa el nombre del trabajador $i: ");
    $salario = floatval(readline("Ingresa el salario de $nombre: "));

   
    $trabajadores[$nombre] = $salario;
}


function calcularSalarioMaximo($trabajadores) {
    return max($trabajadores);
}


function calcularSalarioMinimo($trabajadores) {
    return min($trabajadores);
}


function calcularSalarioMedio($trabajadores, $numeroTrabajadores) {
    return array_sum($trabajadores) / $numeroTrabajadores;
}

$salarioMaximo = calcularSalarioMaximo($trabajadores);
$salarioMinimo = calcularSalarioMinimo($trabajadores);
$salarioMedio = calcularSalarioMedio($trabajadores, $numeroTrabajadores);

echo "Salario Máximo: $salarioMaximo\n";
echo "Salario Mínimo: $salarioMinimo\n";
echo "Salario Medio: $salarioMedio\n";


$porcentaje = readline("Ahora, dime el porcentaje que quieres aumentar al salario de los trabajadores: " );


foreach ($trabajadores as $nombre => $salario) {
    
    
    $salarioAumentado = $salario * (1 + $porcentaje / 100);

   
    echo "Trabajador: $nombre\n";
    echo "Salario Actual: $salario\n";
    echo "Salario Aumentado: $salarioAumentado\n";
}



 ?>