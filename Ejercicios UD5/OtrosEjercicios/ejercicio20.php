<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Saludo según la hora</title>
</head>
<body>

<form method="post" action="">
    <label for="hora">Ingrese la hora (formato 24 horas): </label>
    <input type="number" name="hora" id="hora" min="0" max="23" required>
    <br>
    <input type="submit" value="Obtener Saludo">
</form>

<?php
    $hora = $_POST['hora'];

    function obtenerSaludo($hora) {
        if ($hora >= 6 && $hora <= 12) {
            return "Buenos días";
        } elseif ($hora >= 13 && $hora <= 20) {
            return "Buenas tardes";
        } else {
            return "Buenas noches";
        }
    }

    $saludo = obtenerSaludo($hora);
    echo $saludo;

?>

</body>
</html>
