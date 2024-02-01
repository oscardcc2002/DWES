<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Hora en Zona Horaria</title>
</head>
<body>

<form method="post" action="">
    <label for="zonaHoraria">Seleccione una zona horaria:</label>
    <select name="zonaHoraria" id="zonaHoraria">
        <option value="America/New_York">UTC-5 (Nueva York)</option>
        <option value="Europe/London">UTC (Londres)</option>
        <option value="Asia/Tokyo">UTC+9 (Tokio)</option>
        <!-- Puedes agregar más opciones según tus necesidades -->
    </select>
    <br>
    <input type="submit" value="Obtener Hora">
</form>

<?php

    $zonaHoraria = $_POST['zonaHoraria'];

    // Establecer la zona horaria seleccionada
    date_default_timezone_set($zonaHoraria);

    // Obtener la hora actual en la zona horaria seleccionada
    $horaActual = date("H:i:s");

    echo "La hora actual en la zona horaria $zonaHoraria es: $horaActual";

?>

</body>
</html>
