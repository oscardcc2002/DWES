<?php

/** 
 * @author Oscar del Campo
 */

 $numero = readline("Ingresa un número del 1 al 7 para que te diga qué día de la semana le corresponde: ");


$dias = array("Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado", "Domingo");

if ($numero >= 1 && $numero <= 7) {
    echo "El día correspondiente al número $numero es: " . $dias[$numero - 1];
} else {
    echo "Número fuera de rango. Debe estar entre 1 y 7.";
}
?>
