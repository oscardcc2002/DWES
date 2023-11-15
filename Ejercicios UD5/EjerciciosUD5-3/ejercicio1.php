<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Determinar Tipo de Carácter</title>
</head>
<body>

<form method="post">
    <label for="caracter">Por favor, ingresa un carácter:</label>
    <input type="text" id="caracter" name="caracter" required>

    <input type="submit" value="Determinar Tipo de Carácter">
</form>

<?php
/** 
 * @author Oscar del Campo
 */


    $caracter = $_POST['caracter'];

    echo "<strong>Resultado:</strong><br>";

    if (ctype_upper($caracter)) {
        echo "Es una letra mayúscula.<br>";
    } elseif (ctype_lower($caracter)) {
        echo "Es una letra minúscula.<br>";
    } elseif (is_numeric($caracter)) {
        echo "Es un carácter numérico.<br>";
    } elseif (ctype_space($caracter)) {
        echo "Es un carácter en blanco.<br>";
    } elseif (ctype_punct($caracter)) {
        echo "Es un carácter de puntuación.<br>";
    } else {
        echo "Es un carácter especial.<br>";
    }


 ?>

</body>
</html>
