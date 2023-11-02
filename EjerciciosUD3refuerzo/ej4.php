<?php
/** 
 * @author Oscar del Campo
 */

// a) Bucle for
echo "Múltiplos de 5 (for): ";
for ($i = 0; $i <= 100; $i += 5) {
    echo $i . " ";
}
echo "\n";

// b) Bucle while
echo "Múltiplos de 5 (while): ";
$i = 0;
while ($i <= 100) {
    echo $i . " ";
    $i += 5;
}
echo "\n";

// c) Bucle do-while
echo "Múltiplos de 5 (do-while): ";
$i = 0;
do {
    echo $i . " ";
    $i += 5;
} while ($i <= 100);
echo "\n";

 

 ?>