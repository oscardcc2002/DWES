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


echo "Nombre de persona1: " . $personas["persona1"]["Nombre"] . "\n";
echo "Dirección de persona2: " . $personas["persona2"]["Dirección"] . "\n";
echo "Persona5: " . $personas["persona5"]["Nombre"] . " " . $personas["persona5"]["Dirección"] . " " . $personas["persona5"]["Teléfono"]. " " . $personas["persona5"]["Población"] . "\n";
?>