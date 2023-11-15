<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Salario Semanal</title>
</head>
<body>

<form method="post">
    <label for="horas">Ingresa las horas trabajadas:</label>
    <input type="text" id="horas" name="horas" required>

    <input type="submit" value="Calcular Salario">
</form>

<?php
/** 
 * @author Oscar del Campo
 */

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $horas_trabajadas = $_POST['horas'];
    $tarifa_normal = 12; 
    $tarifa_extra = 16;  

    if ($horas_trabajadas <= 40) {
        $salario = $horas_trabajadas * $tarifa_normal;
    } else {
        $salario = 40 * $tarifa_normal + ($horas_trabajadas - 40) * $tarifa_extra;
    }

    echo "<strong>Resultado:</strong><br>";
    echo "El salario semanal del trabajador es: $" . $salario . "<br>";
}
?>

</body>
</html>
