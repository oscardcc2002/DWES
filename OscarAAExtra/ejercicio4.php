<?php
/**
* @author Óscar del Campo Carpio
*/
$personas = array(
    "persona1" => array(
        "Nombre" => "Juan Pepito",
        "Dirección" => "Calle 123, Valencia",
        "Teléfono" => "123-456-7890",
        "Población" => "Valencia",
        "Hobbies" => array(
            "Películas" => array("Película1", "Película2", "Película3"),
            "Libros" => array("Libro1", "Libro2", "Libro3"),
            "Canciones" => array("Canción1", "Canción2", "Canción3")
        )
    ),
    "persona2" => array(
        "Nombre" => "María García",
        "Dirección" => "Avenida 456, Alicante",
        "Teléfono" => "987-654-3210",
        "Población" => "Alicante",
        "Hobbies" => array(
            "Películas" => array("Película4", "Película5", "Película6"),
            "Libros" => array("Libro4", "Libro5", "Libro6"),
            "Canciones" => array("Canción4", "Canción5", "Canción6")
        )
    ),
    "persona3" => array(
        "Nombre" => "Pedro Sánchez",
        "Dirección" => "Plaza 789, Valencia",
        "Teléfono" => "555-123-4567",
        "Población" => "Valencia",
        "Hobbies" => array(
            "Películas" => array("Película7", "Película8", "Película9"),
            "Libros" => array("Libro7", "Libro8", "Libro9"),
            "Canciones" => array("Canción7", "Canción8", "Canción9")
        )
    ),
    "persona4" => array(
        "Nombre" => "Laura Martínez",
        "Dirección" => "Calle 456, Alicante",
        "Teléfono" => "777-888-9999",
        "Población" => "Alicante",
        "Hobbies" => array(
            "Películas" => array("Película10", "Película11", "Película12"),
            "Libros" => array("Libro10", "Libro11", "Libro12"),
            "Canciones" => array("Canción10", "Canción11", "Canción12")
        )
    ),
    "persona5" => array(
        "Nombre" => "Ana López",
        "Dirección" => "Calle 789, Valencia",
        "Teléfono" => "111-222-3333",
        "Población" => "Valencia",
        "Hobbies" => array(
            "Películas" => array("Película13", "Película14", "Película15"),
            "Libros" => array("Libro13", "Libro14", "Libro15"),
            "Canciones" => array("Canción13", "Canción14", "Canción15")
        )
    )
);

foreach ($personas as $nombre => $datosPersona) {
    echo "Nombre: " . $datosPersona["Nombre"] . "\n";
    echo "Dirección: " . $datosPersona["Dirección"] . "\n";
    echo "Teléfono: " . $datosPersona["Teléfono"] . "\n";
    echo "Población: " . $datosPersona["Población"] . "\n";

    echo "Películas favoritas: " . implode(", ", $datosPersona["Hobbies"]["Películas"]) . "\n";
    echo "Libros favoritos: " . implode(", ", $datosPersona["Hobbies"]["Libros"]) . "\n";
    echo "Canciones favoritas: " . implode(", ", $datosPersona["Hobbies"]["Canciones"]) . "\n";

    echo "\n";
}