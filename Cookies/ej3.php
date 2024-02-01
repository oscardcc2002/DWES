<?php
//Óscar del Campo Carpio
// Nombre de la cookie
$cookie_operations = "user_operations";
$cookie_result = "user_result";

// Variables para almacenar datos
$current_operation = "";
$result = "";
$selected_operation = "";
$old_selected_operation = "";
$old_result= "";

// Verificar si se ha enviado el formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtener la operación seleccionada del formulario
    $current_operation = $_POST['operation'];

    // Obtener la operación anterior de la cookie
    $old_selected_operation =$_COOKIE[$cookie_operations];
    $old_result = $_COOKIE[$cookie_result];

    // Realizar la operación seleccionada
    switch ($current_operation) {
        case 'suma':
            $result = $_POST['num1'] + $_POST['num2'];
            break;
        case 'resta':
            $result = $_POST['num1'] - $_POST['num2'];
            break;
        case 'multiplicacion':
            $result = $_POST['num1'] * $_POST['num2'];
            break;
        case 'division':
            // Verificar si el divisor es diferente de cero
            if ($_POST['num2'] != 0) {
                $result = $_POST['num1'] / $_POST['num2'];
            } else {
                $result = "Error: División por cero.";
            }
            break;
        default:
            $result = "Operación no válida";
    }

    // Almacenar la operación actual en la cookie
    setcookie($cookie_operations, $current_operation, time() + 3600, "/");
    setcookie($cookie_result, $result, time() + 3600, "/");

    $selected_operation = $current_operation;
    

}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora con Cookies</title>
</head>
<body>

<h1>Calculadora con Cookies</h1>

<form method="post" action="">
    <label for="num1">Número 1:</label>
    <input type="number" name="num1" id="num1" required>

    <label for="operation">Operación:</label>
    <select name="operation" id="operation" required>
        <option value="suma">Suma</option>
        <option value="resta">Resta</option>
        <option value="multiplicacion">Multiplicación</option>
        <option value="division">División</option>
    </select>

    <label for="num2">Número 2:</label>
    <input type="number" name="num2" id="num2" required>

    <input type="submit" value="Calcular">
</form>

    <p>Resultado: <?php echo $result; ?></p>

    <p>Operación actual: <?php echo $selected_operation; ?></p>

    <p>Operación anterior: <?php echo $old_selected_operation; ?></p>

    <p>Resultado anterior: <?php echo $old_result; ?></p>


</body>
</html>
