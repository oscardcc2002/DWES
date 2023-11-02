<?php
/** 
 * @author Oscar del Campo
 */





 function imprimeMatriz($matriz) {
    foreach ($matriz as $fila) {
        echo implode(" ", $fila) . "\n";
    }
}

function operaMatriz($matriz1, $matriz2, $operacion) {
    $resultado = array();

    if ($operacion == 's') { // Suma
        foreach ($matriz1 as $fila1) {
            $fila_resultado = array();
            for ($i = 0; $i < count($fila1); $i++) {
                $fila_resultado[] = $fila1[$i] + $matriz2[$i][$i];
            }
            $resultado[] = $fila_resultado;
        }
        $operacion_str = 'Suma';
    } elseif ($operacion == 'r') { // Resta
        // Implementa la resta de matrices de manera similar a la suma
    } elseif ($operacion == 'm') { // Multiplicación
        // Implementa la multiplicación de matrices
    } elseif ($operacion == 'd') { // División
        // Implementa la división de matrices
    } else {
        echo "Operación no válida\n";
        return;
    }

    echo "Matriz 1:\n";
    imprimeMatriz($matriz1);
    echo "Matriz 2:\n";
    imprimeMatriz($matriz2);
    echo "Operación a realizar: $operacion_str\n";
    echo "Resultado:\n";
    imprimeMatriz($resultado);
}

// Ejemplo
$matriz1 = array(array(1, 2, 3), array(4, 5, 6), array(7, 8, 9));
$matriz2 = array(array(9, 8, 7), array(6, 5, 4), array(3, 2, 1));
$operacion = 's'; // Cambia la operación según lo que quieras hacer ('s', 'r', 'm', 'd')
operaMatriz($matriz1, $matriz2, $operacion);


 ?>