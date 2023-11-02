<?php
/** 
 * @author Oscar del Campo
 */

$caracter = readline("Por favor, ingresa un carácter: ");

if (ctype_upper($caracter)) {
    echo "Es una letra mayúscula.\n";
} elseif (ctype_lower($caracter)) {
    echo "Es una letra minúscula.\n";
} elseif (is_numeric($caracter)) {
    echo "Es un carácter numérico.\n";
} elseif (ctype_space($caracter)) {
    echo "Es un carácter en blanco.\n";
} elseif (ctype_punct($caracter)) {
    echo "Es un carácter de puntuación.\n";
} else {
    echo "Es un carácter especial.\n";
}

 ?>