<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Diferencia de Fechas</title>
</head>
<body>

<form method="post">
    <label for="fecha_actual">Fecha y hora actual (A-m-d H:m:s):</label>
    <input type="text" id="fecha_actual" name="fecha_actual" required>

    <label for="fecha_deseada">Fecha y hora deseada (A-m-d H:m:s):</label>
    <input type="text" id="fecha_deseada" name="fecha_deseada" required>

    <input type="submit" value="Calcular Diferencia de Fechas">
</form>

<?php
/** 
 * @author Oscar del Campo
 */


    $fecha_actual = $_POST['fecha_actual'];
    $fecha_deseada = $_POST['fecha_deseada'];

    echo "<strong>Resultado:</strong><br>";

    $fechaHoraActualObj = new DateTime($fecha_actual);
    $fechaHoraDeseadaObj = new DateTime($fecha_deseada);

    if ($fechaHoraDeseadaObj > $fechaHoraActualObj) {
        $interval = $fechaHoraActualObj->diff($fechaHoraDeseadaObj);
        $dias = $interval->days;
        $horas = $interval->h;
        $minutos = $interval->i;

        echo "Faltan $dias día(s), $horas hora(s), y $minutos minuto(s) para el momento deseado.<br>";
    } else {
        echo "El momento deseado ya ha pasado.<br>";
    }

?>

</body>
</html>
