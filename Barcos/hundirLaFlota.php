<?php
/** 
 * @author Oscar del Campo
 */


// Crear el tablero 8x8
$tablero = array();
for ($i = 0; $i < 8; $i++) {
    $tablero[$i] = array();
    for ($j = 0; $j < 8; $j++) {
        // Rellena el tablero con valores al 0 porque todos es agua al principio
        $tablero[$i][$j] = 0;
        
    }
}

   
    echo "Vamos a colocar los 4 barcos que ocupan una posición en el tablero";
    echo "\n";

    for ($p = 0; $p < 4; $p++) {
    echo "Dónde quieres ingresar en la posición Y el barco $p?";
    $b = (int)readline();
    echo "Dónde quieres ingresar en la posición X el barco $p?";
    $v = (int)readline();
    $tablero[$b][$v]= 1;
    }

    echo "Vamos a colocar los 3 barcos que ocupan dos posiciones en el tablero";
    echo "\n";


    for ($o = 0; $o < 3; $o++) {
        for($e = 0; $e < 2; $e++){
                echo "Dónde quieres ingresar en la posición Y el barco $o?";
                $b = (int)readline();
                echo "Dónde quieres ingresar en la posición X el barco $o?";
                $v = (int)readline();
                $tablero[$b][$v]= 1;
        }
    }






 echo "Vamos a colocar los 2 barcos que ocupan tres posiciones en el tablero";
 echo "\n";

    
    for ($x = 0; $x < 2; $x++) {
        for($t = 0; $t < 3; $t++){
                echo "Dónde quieres ingresar en la posición Y el barco $x?";
                $b = (int)readline();
                echo "Dónde quieres ingresar en la posición X el barco $x?";
                $v = (int)readline();
                $tablero[$b][$v]= 1;
        }
    }

    echo "Vamos a colocar el barco que ocupa cuatro posiciones en el tablero";
    echo "\n";
   
       
       
           for($m = 0; $m < 4; $m++){
                   echo "Dónde quieres ingresar en la posición Y el barco $m?";
                   $b = (int)readline();
                   echo "Dónde quieres ingresar en la posición X el barco $m?";
                   $v = (int)readline();
                   $tablero[$b][$v]= 1;
           }



/*for ($i = 0; $i < 8; $i++) {
    for($j = 0; $j < 8; $j++){
if($tablero[$i][$j] === 0)
{
    colocarbarcos();
}
else if($tablero[$i][$j] === 1) {
    echo "La posición ya está ocupada vuelve a comenzar";
    break;
}
}
}
*/



//fuction disparar($tablero);





// Mostrar el tablero
echo "Tablero 8x8:\n";
foreach ($tablero as $fila) {
    foreach ($fila as $valor) {
        echo $valor . "\t";
    }
    echo "\n";
}

echo "Dónde quieres disparar en la posición Y?";
$disparoY = (int)readline();
echo "Dónde quieres disparar en la posición X?";
$disparoX = (int)readline();

if( $tablero[$disparoY][$disparoX] = 0){

    echo "Has tocado agua!";


}


else if( $tablero[$disparoY][$disparoX] = 1){


    echo "Has tocado un barco!";
    $tablero[$disparoY][$disparoX] = -1;
    if($tablero[$disparoY+1][$disparoX-1] = 0 && $tablero[$disparoY+1][$disparoX-1] = 0 ){

        $tablero[$disparoY][$disparoX] = -2;
        echo "Has hundido un barco!";
    }


}