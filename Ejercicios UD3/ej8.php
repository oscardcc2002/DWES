<?php
/** 
 * @author Oscar del Campo
 */
$numero = intval(readline("Ingresa un número para crear la tabla de multiplicar: "));

if ($numero > 0) {
    echo "Tabla de multiplicar del $numero:\n";

    for ($i = 1; $i <= 10; $i++) {
        $resultado = $numero * $i;
        echo "$numero x $i = $resultado\n";
    }
} else {
    echo "Ingresa un número válido mayor que cero.\n";
}

 ?>