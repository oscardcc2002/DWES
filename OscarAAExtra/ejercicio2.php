<?php
/**
* @author Óscar del Campo Carpio
*/
$personas = array(
    "persona1" => array(
        "Nombre" => "Juan Pepito",
        "Dirección" => "Calle 123, Valencia",
        "Teléfono" => "123-456-7890",
        "Población" => "Valencia"
    ),
    "persona2" => array(
        "Nombre" => "María García",
        "Dirección" => "Avenida 456, Alicante",
        "Teléfono" => "987-654-3210",
        "Población" => "Alicante"
    ),
    "persona3" => array(
        "Nombre" => "Pedro Sánchez",
        "Dirección" => "Plaza 789, Valencia",
        "Teléfono" => "555-123-4567",
        "Población" => "Valencia"
    ),
    "persona4" => array(
        "Nombre" => "Laura Martínez",
        "Dirección" => "Calle 456, Alicante",
        "Teléfono" => "777-888-9999",
        "Población" => "Alicante"
    ),
    "persona5" => array(
        "Nombre" => "Ana López",
        "Dirección" => "Calle 789, Valencia",
        "Teléfono" => "111-222-3333",
        "Población" => "Valencia"
    )
);

echo "Persona1: " . $personas["persona1"]["Nombre"] . ", " . $personas["persona1"]["Dirección"] . ", " . $personas["persona1"]["Teléfono"]. ", " . $personas["persona1"]["Población"] . "\n";
echo "Persona2: " . $personas["persona2"]["Nombre"] . ", " . $personas["persona2"]["Dirección"] . ", " . $personas["persona2"]["Teléfono"]. ", " . $personas["persona2"]["Población"] . "\n";
echo "Persona3: " . $personas["persona3"]["Nombre"] . ", " . $personas["persona3"]["Dirección"] . ", " . $personas["persona3"]["Teléfono"]. ", " . $personas["persona3"]["Población"] . "\n";
echo "Persona4: " . $personas["persona4"]["Nombre"] . ", " . $personas["persona4"]["Dirección"] . ", " . $personas["persona4"]["Teléfono"]. ", " . $personas["persona4"]["Población"] . "\n";
echo "Persona5: " . $personas["persona5"]["Nombre"] . ", " . $personas["persona5"]["Dirección"] . ", " . $personas["persona5"]["Teléfono"]. ", " . $personas["persona5"]["Población"] . "\n";
?>