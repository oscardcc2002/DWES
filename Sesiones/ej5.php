<?php
// Óscar del Campo Carpio
// Iniciar la sesión
session_start();

// Variables para almacenar datos
$current_amount = "";
$current_currency = "";
$current_conversion = "";
$old_amount = "";
$old_currency = "";
$old_conversion = "";

// Verificar si se ha enviado el formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtener los valores del formulario
    $current_amount = $_POST['amount'];
    $current_currency = $_POST['currency'];

    // Realizar la conversión
    if ($current_currency === 'euros_to_pesetas') {
        $current_conversion = $current_amount * 166.386; // 1 euro = 166.386 pesetas
    } elseif ($current_currency === 'pesetas_to_euros') {
        $current_conversion = $current_amount / 166.386;
    }

    // Obtener los valores anteriores de la sesión
    $old_amount = isset($_SESSION['conversion_amount']) ? $_SESSION['conversion_amount'] : '';
    $old_currency = isset($_SESSION['conversion_currency']) ? $_SESSION['conversion_currency'] : '';
    $old_conversion = isset($_SESSION['conversion_result']) ? $_SESSION['conversion_result'] : '';

    // Almacenar la conversión actual en la sesión
    $_SESSION['conversion_amount'] = $current_amount;
    $_SESSION['conversion_currency'] = $current_currency;
    $_SESSION['conversion_result'] = $current_conversion;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Euros a Pesetas y Viceversa</title>
</head>
<body>

<h1>Conversor de Euros a Pesetas y Viceversa</h1>

<form method="post" action="">
    <label for="amount">Cantidad:</label>
    <input type="number" name="amount" id="amount" step="any" required>

    <label for="currency">Selecciona la conversión:</label>
    <select name="currency" id="currency" required>
        <option value="euros_to_pesetas">Euros a Pesetas</option>
        <option value="pesetas_to_euros">Pesetas a Euros</option>
    </select>

    <input type="submit" value="Convertir">
</form>

    <p>Conversión actual:</p>
    <p>Cantidad: <?php echo $current_amount; ?></p>
    <p>Moneda: <?php echo $current_currency === 'euros_to_pesetas' ? 'Euros' : 'Pesetas'; ?></p>
    <p>Conversión: <?php echo $current_conversion; ?></p>

    <p>Conversión anterior:</p>
    <p>Cantidad: <?php echo $old_amount; ?></p>
    <p>Moneda: <?php echo $old_currency === 'euros_to_pesetas' ? 'Euros' : 'Pesetas'; ?></p>
    <p>Conversión: <?php echo $old_conversion; ?></p>

</body>
</html>
