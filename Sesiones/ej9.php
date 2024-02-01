<?php
session_start();
// Óscar del Campo Carpio
// Nombre de la sesión para los números
$session_numbers = "user_numbers";

// Verificar si se ha enviado el formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtener los números del formulario
    $numbers = array_map('intval', explode(',', $_POST['numbers']));

    // Calcular la media, mediana y moda
    $mean = count($numbers) > 0 ? array_sum($numbers) / count($numbers) : null;
    $median = calculateMedian($numbers);
    $mode = calculateMode($numbers);

    // Obtener los números y resultados anteriores de la sesión
    $old_numbers = isset($_SESSION[$session_numbers]) ? $_SESSION[$session_numbers] : array();
    $old_mean = isset($_SESSION['mean']) ? $_SESSION['mean'] : null;
    $old_median = isset($_SESSION['median']) ? $_SESSION['median'] : null;
    $old_mode = isset($_SESSION['mode']) ? $_SESSION['mode'] : null;

    // Establecer la sesión con los nuevos valores
    $_SESSION[$session_numbers] = $numbers;
    $_SESSION['mean'] = $mean;
    $_SESSION['median'] = $median;
    $_SESSION['mode'] = $mode;
}

// Función para calcular la mediana
function calculateMedian($numbers) {
    sort($numbers);
    $count = count($numbers);
    $middle = floor(($count - 1) / 2);

    return ($count % 2) ? $numbers[$middle] : ($numbers[$middle] + $numbers[$middle + 1]) / 2;
}

// Función para calcular la moda
function calculateMode($numbers) {
    $count = array_count_values($numbers);
    $max = max($count);

    return array_keys($count, $max);
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Cálculo</title>
</head>
<body>

<h1>Formulario de Cálculo</h1>

<?php if (!empty($numbers)): ?>
    <p>Números actuales: <?php echo implode(', ', $numbers); ?></p>
    <p>Media actual: <?php echo $mean !== null ? round($mean, 2) : 'No hay números'; ?></p>
    <p>Mediana actual: <?php echo $median !== null ? $median : 'No hay números'; ?></p>
    <p>Moda actual: <?php echo $mode ? implode(', ', $mode) : 'No hay números'; ?></p>
<?php endif; ?>

<?php if (!empty($old_numbers)): ?>
    <p>Números anteriores: <?php echo implode(', ', $old_numbers); ?></p>
    <p>Media anterior: <?php echo $old_mean !== null ? round($old_mean, 2) : 'No hay números'; ?></p>
    <p>Mediana anterior: <?php echo $old_median !== null ? $old_median : 'No hay números'; ?></p>
    <p>Moda anterior: <?php echo $old_mode ? implode(', ', $old_mode) : 'No hay números'; ?></p>
<?php endif; ?>

<form method="post" action="">
    <label for="numbers">Ingresa números (separados por comas):</label>
    <input type="text" name="numbers" id="numbers" required>

    <br>

    <input type="submit" value="Calcular">
</form>

</body>
</html>
