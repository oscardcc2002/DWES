<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Determinar Formato de Hora</title>
</head>
<body>

<form method="post">
    <label for="hora">Por favor, ingresa una hora en el formato HH:MM:SS:</label>
    <input type="text" id="hora" name="hora" required>

    <input type="submit" value="Determinar Formato de Hora">
</form>

<?php
/** 
 * @author Oscar del Campo
 */


    $hora = $_POST['hora'];

    $formatoValido = preg_match('/^([0-1]?[0-9]|2[0-3]):[0-5][0-9]:[0-5][0-9]$/', $hora); //mediante el preg_match comprobamos si la condición expresada en la expresión regular se cumple, si se cumple la variable se vuelve true

    echo "<strong>Resultado:</strong><br>";

    if ($formatoValido) {
        echo "La hora ingresada está en el formato correcto.<br>";
    } else {
        echo "La hora ingresada no está en el formato correcto.<br>";
    }

?>
</body>
</html>