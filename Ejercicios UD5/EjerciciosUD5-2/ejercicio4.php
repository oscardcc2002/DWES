<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
    </head>

<form method="GET">
    <label for="numero1">Introduce el primer número:</label>
    <input type="text" id="numero1" name="numero1" required>

    <label for="numero2">Introduce el segundo número:</label>
    <input type="text" id="numero2" name="numero2" required>

    <label for="operaciones">Selecciona las operaciones a realizar:</label>
    <input type="checkbox" name="operaciones[]" value="suma"> Suma
    <input type="checkbox" name="operaciones[]" value="resta"> Resta
    <input type="checkbox" name="operaciones[]" value="multiplicacion"> Multiplicación
    <input type="checkbox" name="operaciones[]" value="division"> División

    <input type="submit" value="Calcular">
</form>


<?php
    /** 
 * @author Oscar del Campo
 */
$numero1 = $_GET['numero1'];
$numero2 = $_GET['numero2'];
$operaciones = isset($_GET['operaciones']) ? $_GET['operaciones'] : [];

echo "<strong>Resultados:</strong><br>";

foreach ($operaciones as $operacion) {
    switch ($operacion) {
        case 'suma':
            echo "$numero1 + $numero2 = " . ($numero1 + $numero2) . "<br>";
            break;
        case 'resta':
            echo "$numero1 - $numero2 = " . ($numero1 - $numero2) . "<br>";
            break;
        case 'multiplicacion':
            echo "$numero1 * $numero2 = " . ($numero1 * $numero2) . "<br>";
            break;
        case 'division':
            if ($numero2 != 0) {
                echo "$numero1 / $numero2 = " . ($numero1 / $numero2) . "<br>";
            } else {
                echo "No se puede dividir por cero.<br>";
            }
            break;
    }
}
?>

</body>
</html>