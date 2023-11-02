<?php
/** 
 * @author Oscar del Campo
 */

 $numero = readline("Ingresa un número entero de hasta 5 cifras: ");
$longitud = strlen($numero);

if ($longitud < 2) {
    echo "El número tiene menos de dos cifras, por lo que no tiene penúltima cifra.\n";
} else {
    $numCadena = (string)$numero;
    $penultimaCifra = $numCadena[strlen($numCadena) - 2];
    echo "La penúltima cifra es: $penultimaCifra\n";
}


 
 ?>