<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Traductor de Palabras</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
        }

        table, th, td {
            border: 1px solid black;
            padding: 10px;
            text-align: left;
        }
    </style>
</head>
<body>
    <h1>Traductor de Palabras</h1>

    <?php
    $palabras = array(
        "Hello" => "Hola",
        "Goodbye" => "Adiós",
        "Friend" => "Amigo",
        "Cat" => "Gato",
        "Dog" => "Perro",
        "Sun" => "Sol",
        "Moon" => "Luna",
        "Water" => "Agua",
        "Tree" => "Árbol",
        "Car" => "Coche"
    );

    // Procesar el formulario cuando se envía
 
        echo "<h2>Traducciones Seleccionadas:</h2>";
        echo "<table>";
        foreach ($_POST['palabras_seleccionadas'] as $palabra) {
            echo "<tr><td>$palabra</td><td>{$palabras[$palabra]}</td></tr>";
        }
        echo "</table>";
    ?>

    <form method="post">
        <h2>Selecciona las palabras a traducir:</h2>
        <table>
            <?php
            foreach ($palabras as $ingles => $espanol) {
                echo "<tr><td><input type='checkbox' name='palabras_seleccionadas[]' value='$ingles'>$ingles</td></tr>";
            }
            ?>
        </table>
        <br>
        <input type="submit" value="Traducir">
    </form>
</body>
</html>
