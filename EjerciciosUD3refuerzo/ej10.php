<?php
/** 
 * @author Oscar del Campo
 */

// Función para leer una matriz dada por el usuario
function leerMatriz($filas, $columnas) {
    $matriz = array();
    for ($i = 0; $i < $filas; $i++) {
        $matriz[$i] = array();
        for ($j = 0; $j < $columnas; $j++) {
            echo "Ingresa el elemento [$i][$j]: ";
            $matriz[$i][$j] = (int)readline();
        }
    }
    return $matriz;
}

// Función para mostrar una matriz
function mostrarMatriz($matriz) {
    foreach ($matriz as $fila) {
        foreach ($fila as $elemento) {
            echo $elemento . " ";
        }
        echo "\n";
    }
}

// Leer y crear la primera matriz
echo "Matriz A:\n";
$matrizA = leerMatriz(3, 3);

// Leer y crear la segunda matriz
echo "Matriz B:\n";
$matrizB = leerMatriz(3, 3);

// Sumar las dos matrices
$matrizResultado = array();

for ($i = 0; $i < 3; $i++) {
    $matrizResultado[$i] = array();
    for ($j = 0; $j < 3; $j++) {
        $matrizResultado[$i][$j] = $matrizA[$i][$j] + $matrizB[$i][$j];
    }
}

// Mostrar la matriz resultante
echo "Matriz Resultado (A + B):\n";
mostrarMatriz($matrizResultado);


 ?>