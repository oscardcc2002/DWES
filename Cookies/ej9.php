<?php
//Óscar del Campo Carpio
// Nombre de las cookies
$cookie_timezone = "user_timezone";
$cookie_time = "user_time";

// Verificar si se ha enviado el formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtener la zona horaria del formulario
    $user_timezone = $_POST['timezone'];

    // Establecer la zona horaria para las funciones date()
    date_default_timezone_set($user_timezone);

    // Obtener la zona horaria y hora anterior de las cookies
    $old_user_timezone = $_COOKIE[$cookie_timezone];
    $old_user_time = $_COOKIE[$cookie_time];

    // Establecer las cookies con los nuevos valores
    setcookie($cookie_timezone, $user_timezone, time() + 3600, "/");
    setcookie($cookie_time, date('H:i:s'), time() + 3600, "/");
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

    <p>Zona horaria actual: <?php echo $user_timezone; ?></p>
    <p>Hora actual: <?php echo date('H:i:s'); ?></p>

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
