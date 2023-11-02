<?php
/** 
 * @author Oscar del Campo
 */

$num1 = readline("Ingresa el primer número: ");
$num2 = readline("Ingresa el segundo número: ");
$num3 = readline("Ingresa el tercer número: ");

if ($num1 == $num2 && $num2 == $num3) {
    echo "Hay tres números iguales a $num1.\n";
} elseif ($num1 == $num2) {
    echo "Hay dos números iguales a: $num1.\n";
} elseif ($num1 == $num3) {
    echo "Hay dos números iguales a: $num1.\n";
} elseif ($num2 == $num3) {
    echo "Hay dos números iguales a: $num2.\n";
} else {
    echo "No hay números iguales.\n";
}
?>