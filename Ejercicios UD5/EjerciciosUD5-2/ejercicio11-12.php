<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Euros y Pesetas</title>
</head>
<body>

<form method="post">
    <label for="cantidad">Introduce la cantidad:</label>
    <input type="text" id="cantidad" name="cantidad" required>

    <label for="moneda">Selecciona la moneda:</label>
    <select id="moneda" name="moneda" required>
        <option value="euros">Euros a Pesetas</option>
        <option value="pesetas">Pesetas a Euros</option>
    </select>

    <input type="submit" value="Convertir">
</form>


<?php
/** 
 * @author Oscar del Campo
 */


    $cantidad = $_POST['cantidad'];
    $moneda = $_POST['moneda'];

    if ($moneda == 'euros') {
        $tipo_cambio = 166.386; // 1 euro = 166.386 pesetas
        $resultado = $cantidad * $tipo_cambio;
        echo "$cantidad euros son $resultado pesetas.\n";
    } elseif ($moneda == 'pesetas') {
        $tipo_cambio = 0.006; // 1 peseta = 0.006 euros
        $resultado = $cantidad * $tipo_cambio;
        echo "$cantidad pesetas son $resultado euros.\n";
    } else {
        echo "Error en la selección de la moneda.";
    }

?>
</body>
</html>
