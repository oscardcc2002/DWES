<?php
session_start();
// Óscar del Campo Carpio
// Nombre de la sesión para la zona horaria y la hora
$session_timezone = "user_timezone";
$session_time = "user_time";

// Verificar si se ha enviado el formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtener la zona horaria del formulario
    $user_timezone = $_POST['timezone'];

    // Establecer la zona horaria para las funciones date()
    date_default_timezone_set($user_timezone);

    // Obtener la zona horaria y hora anterior de las sesiones
    $old_user_timezone = isset($_SESSION[$session_timezone]) ? $_SESSION[$session_timezone] : "";
    $old_user_time = isset($_SESSION[$session_time]) ? $_SESSION[$session_time] : "";

    // Establecer las sesiones con los nuevos valores
    $_SESSION[$session_timezone] = $user_timezone;
    $_SESSION[$session_time] = date('H:i:s');
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Zona Horaria</title>
</head>
<body>

<h1>Formulario de Zona Horaria</h1>

<?php if (!empty($_SESSION[$session_timezone]) && !empty($_SESSION[$session_time])): ?>
    <p>Zona horaria actual: <?php echo $_SESSION[$session_timezone]; ?></p>
    <p>Hora actual: <?php echo $_SESSION[$session_time]; ?></p>
<?php endif; ?>

<?php if (!empty($old_user_timezone) && !empty($old_user_time)): ?>
    <p>Zona horaria anterior: <?php echo $old_user_timezone; ?></p>
    <p>Hora anterior: <?php echo $old_user_time; ?></p>
<?php endif; ?>

<form method="post" action="">
    <label for="timezone">Selecciona tu zona horaria:</label>
    <select name="timezone" id="timezone" required>
        <option value="America/New_York">America/New_York</option>
        <option value="Europe/London">Europe/London</option>
        <option value="Asia/Tokyo">Asia/Tokyo</option>
    </select>

    <br>

    <input type="submit" value="Guardar Zona Horaria">
</form>

</body>
</html>
