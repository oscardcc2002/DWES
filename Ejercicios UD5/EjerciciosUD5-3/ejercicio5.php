<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Costo de Llamadas</title>
</head>
<body>

<form method="post">
    <h2>Ingresa la duración de las 5 llamadas en minutos:</h2>

    <label for="llamada1">Llamada 1:</label>
    <input type="number" id="llamada1" name="llamada1" required>

    <label for="llamada2">Llamada 2:</label>
    <input type="number" id="llamada2" name="llamada2" required>

    <label for="llamada3">Llamada 3:</label>
    <input type="number" id="llamada3" name="llamada3" required>

    <label for="llamada4">Llamada 4:</label>
    <input type="number" id="llamada4" name="llamada4" required>

    <label for="llamada5">Llamada 5:</label>
    <input type="number" id="llamada5" name="llamada5" required>

    <input type="submit" value="Calcular Costo Total">
</form>

<?php
/** 
 * @author Oscar del Campo
 */


    $llamadas = [
        $_POST['llamada1'],
        $_POST['llamada2'],
        $_POST['llamada3'],
        $_POST['llamada4'],
        $_POST['llamada5']
    ];

    echo "<strong>Resultado:</strong><br>";

    $costo_total = 0;

    foreach ($llamadas as $duracion) {
        if ($duracion < 3) {
            $costo = 10; // Llamadas de menos de 3 minutos cuestan 10 céntimos.
        } else {
            $costo = 10 + ($duracion - 3) * 5; // Llamadas de más de 3 minutos tienen un costo adicional de 5 céntimos por minuto.
        }
        $costo_total += $costo;
    }
    echo "El costo de la llamada es de 10 céntimos si es menor a 3 minutos, si es de más de 3 minutos tienen un costo adicional de 5 céntimos por minuto.<br>";
    echo "El costo total de las 5 llamadas es de $costo_total céntimos.<br>";





?>

</body>
</html>
