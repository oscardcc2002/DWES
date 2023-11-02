<?php
/** 
 * @author Oscar del Campo
 */


$vectorA = array();
$vectorB = array();
$vectorC = array();


for ($i = 0; $i < 10; $i++) {
    $numeroA = (int)readline("Ingresa el número en la posición [$i] para el vector A: ");
    $numeroB = (int)readline("Ingresa el número en la posición [$i] para el vector B: ");
    $vectorA[] = $numeroA;
    $vectorB[] = $numeroB;
}

// Mezclar los elementos en el vector C
for ($i = 0; $i < 10; $i++) {
    $vectorC[] = $vectorA[$i];
    $vectorC[] = $vectorB[$i];
}



echo "Vector C: ";
print_r($vectorC);

 ?>