<?php
/** 
 * @author Oscar del Campo
 */

 $numeros = [readline("Introduce el primer número: "), readline("Introduce el segundo número: "), readline("Introduce el tercer número: ")];

 rsort($numeros);
 
 if ($numeros[0] == $numeros[1] && $numeros[1] == $numeros[2]) {
    echo "Los tres números son iguales: " . $numeros[0];
} elseif ($numeros[0] == $numeros[1] || $numeros[0] == $numeros[2] || $numeros[1] == $numeros[2]) {
    echo "Dos de los tres números son iguales y así estarían ordenados de mayor a menor: " . implode(", ", $numeros);
} else {
    echo "Los números ordenados de mayor a menor son: " . implode(", ", $numeros);
}

?>