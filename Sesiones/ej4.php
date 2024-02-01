<?php
// Óscar del Campo Carpio
// Iniciar la sesión
session_start();

// Variables para almacenar datos
$current_day = "";
$current_fortnight = "";
$old_day = "";
$old_fortnight = "";

// Verificar si se ha enviado el formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtener los valores del formulario
    $current_day = $_POST['day'];

    // Realizar el cálculo de la quincena actual
    $current_fortnight = ($current_day <= 15) ? "Primera quincena" : "Segunda quincena";

    // Obtener los valores anteriores de la sesión
    $old_day = isset($_SESSION['day']) ? $_SESSION['day'] : '';
    $old_fortnight = isset($_SESSION['fortnight']) ? $_SESSION['fortnight'] : '';

    // Almacenar los valores actuales en la sesión
    $_SESSION['day'] = $current_day;
    $_SESSION['fortnight'] = $current_fortnight;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Quincena</title>
</head>
<body>

<h1>Formulario de Quincena</h1>

<form method="post" action="">
    <label for="day">Ingresa el día:</label>
    <input type="number" name="day" id="day" min="1" max="31" required>

    <br>

    <input type="submit" value="Calcular Quincena">
</form>

<p>Quincena actual:</p>
<p>Día: <?php echo $current_day; ?></p>
<p>Quincena: <?php echo $current_fortnight; ?></p>

<p>Quincena anterior:</p>
<p>Día: <?php echo $old_day; ?></p>
<p>Quincena: <?php echo $old_fortnight; ?></p>

</body>
</html>
