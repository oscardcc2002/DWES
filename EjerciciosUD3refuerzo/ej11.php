<?php
/** 
 * @author Oscar del Campo
 */


// Crear la tabla 10x10
$tabla = array();
for ($i = 0; $i < 10; $i++) {
    $tabla[$i] = array();
    for ($j = 0; $j < 10; $j++) {
        // Rellena la tabla con valores
        $tabla[$i][$j] = rand(1, 100);
    }
}

// Mostrar la tabla
echo "Tabla 10x10:\n";
foreach ($tabla as $fila) {
    foreach ($fila as $valor) {
        echo $valor . "\t";
    }
    echo "\n";
}

// Calcular y mostrar la suma de cada fila
echo "Suma de cada fila:\n";
foreach ($tabla as $fila) {
    echo array_sum($fila) . "\t";
}

// Calcular y mostrar la suma de cada columna
echo "\nSuma de cada columna:\n";
for ($j = 0; $j < 10; $j++) {
    $sumaColumna = 0;
    for ($i = 0; $i < 10; $i++) {
        $sumaColumna += $tabla[$i][$j];
    }
    echo $sumaColumna . "\t";
}

 ?>