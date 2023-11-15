<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quincena Checker</title>
</head>
<body>

<form  method="post">
    <label for="dia">Introduce el día actual:</label>
    <input type="text" id="dia" name="dia" required>

    <input type="submit" value="Verificar Quincena">
</form>


<?php
   /** 
 * @author Oscar del Campo
 */
$dia = $_POST['dia'];

echo "<strong>Resultado:</strong><br>";

if (is_numeric($dia)) {
    $dia = (int)$dia;  // Convertir a entero si es un número válido

    if ($dia > 0 && $dia <= 15) {
        echo "Primera quincena";
    } else if ($dia > 15 && $dia <= 30) {
        echo "Segunda quincena";
    } else if ($dia > 30 || $dia < 0) {
        echo "Valor fuera de los rangos";
    }
} else {
    echo "Por favor, introduce un valor numérico válido.";
}
?>


</body>
</html>