<?php
session_start();
// Óscar del Campo Carpio
// Nombre de la sesión para la preferencia de publicidad
$session_name = "ads_preference";

// Verificar si se ha enviado el formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtener el nombre de usuario y la preferencia del formulario
    $user_name = $_POST['user_name'];
    $ads_preference = $_POST['ads_preference'];

    // Obtener la preferencia y el nombre de usuario anterior de la sesión
    $old_ads_preference = isset($_SESSION[$session_name]) ? $_SESSION[$session_name] : '';
    $old_user_name = isset($_SESSION['user_name']) ? $_SESSION['user_name'] : '';

    // Establecer la sesión con el nuevo nombre de usuario y la preferencia
    $_SESSION['user_name'] = $user_name;
    $_SESSION[$session_name] = $ads_preference;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Preferencia de Publicidad</title>
</head>
<body>

<h1>Preferencia de Publicidad</h1>

<form method="post" action="">
    <label for="user_name">Nombre de Usuario:</label>
    <input type="text" id="user_name" name="user_name" required>
    <br>

    <p>Nombre de usuario actual: <?php echo isset($_SESSION['user_name']) ? $_SESSION['user_name'] : 'Ninguno'; ?></p>
    <p>Nombre de usuario anterior: <?php echo $old_user_name ? $old_user_name : 'Ninguno'; ?></p>

    <p>Preferencia actual: <?php echo (isset($ads_preference) && $ads_preference === 'yes') ? 'Sí' : 'No'; ?></p>
    <p>Preferencia anterior: <?php echo ($old_ads_preference === 'yes') ? 'Sí' : 'No'; ?></p>

    <p>¿Desea recibir publicidad?</p>
    <label>
        <input type="radio" name="ads_preference" value="yes" <?php echo (isset($ads_preference) && $ads_preference === 'yes') ? 'checked' : ''; ?>>
        Sí
    </label>
    <label>
        <input type="radio" name="ads_preference" value="no" <?php echo (isset($ads_preference) && $ads_preference === 'no') ? 'checked' : ''; ?>>
        No
    </label>

    <br>

    <input type="submit" value="Guardar Preferencia">
</form>

</body>
</html>
