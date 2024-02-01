<?php
//Óscar del Campo Carpio
// Iniciar sesión
session_start();

// Verificar si se ha enviado el formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtener los valores del formulario
    $user_name = $_POST['user_name'];
    $selected_language = $_POST['language'];
    $selected_color = $_POST['color'];
    $selected_city = $_POST['city'];

    // Obtener los valores antiguos de la sesión
    $old_user = isset($_SESSION['user']) ? $_SESSION['user'] : '';
    $old_language = isset($_SESSION['language']) ? $_SESSION['language'] : '';
    $old_color = isset($_SESSION['color']) ? $_SESSION['color'] : '';
    $old_city = isset($_SESSION['city']) ? $_SESSION['city'] : '';

    // Establecer los valores actuales en la sesión
    $_SESSION['user'] = $user_name;
    $_SESSION['language'] = $selected_language;
    $_SESSION['color'] = $selected_color;
    $_SESSION['city'] = $selected_city;
} else {
    // Obtener los valores de la sesión si no se ha enviado el formulario
    $user_name = isset($_SESSION['user']) ? $_SESSION['user'] : '';
    $selected_language = isset($_SESSION['language']) ? $_SESSION['language'] : '';
    $selected_color = isset($_SESSION['color']) ? $_SESSION['color'] : '';
    $selected_city = isset($_SESSION['city']) ? $_SESSION['city'] : '';

    $old_user = '';
    $old_language = '';
    $old_color = '';
    $old_city = '';
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario con Sesiones</title>
</head>
<body>

<h1>Formulario con Sesiones</h1>

<p>Valores actuales:</p>
<p>Usuario: <?php echo $user_name; ?></p>
<p>Idioma: <?php echo $selected_language; ?></p>
<p>Color: <?php echo $selected_color; ?></p>
<p>Ciudad: <?php echo $selected_city; ?></p>

<br>

<p>Valores antiguos:</p>
<p>Usuario anterior: <?php echo $old_user; ?></p>
<p>Idioma anterior: <?php echo $old_language; ?></p>
<p>Color anterior: <?php echo $old_color; ?></p>
<p>Ciudad anterior: <?php echo $old_city; ?></p>

<br>

<form method="post" action="">
    <label for="user_name">Nombre:</label>
    <input type="text" name="user_name" id="user_name" value="<?php echo $user_name; ?>" required>

    <br>

    <label for="language">Preferencia de idioma:</label>
    <input type="text" name="language" id="language" value="<?php echo $selected_language; ?>" required>

    <label for="color">Color favorito:</label>
    <input type="color" name="color" id="color" value="<?php echo $selected_color; ?>" required>

    <label for="city">Ciudad:</label>
    <input type="text" name="city" id="city" value="<?php echo $selected_city; ?>" required>

    <br>

    <input type="submit" value="Enviar">
</form>

</body>
</html>
