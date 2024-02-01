<?php
//Óscar del Campo Carpio
// Nombre de las cookies
$cookie_name = "user";
$cookie_language = "language";
$cookie_color = "color";
$cookie_city = "city";

// Verificar si se ha enviado el formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtener los valores del formulario
    $user_name = $_POST['user_name'];
    $selected_language = $_POST['language'];
    $selected_color = $_POST['color'];
    $selected_city = $_POST['city'];

    // Obtener los valores antiguos de las cookies
    $old_user = $_COOKIE[$cookie_name];
    $old_language = $_COOKIE[$cookie_language];
    $old_color = $_COOKIE[$cookie_color];
    $old_city = $_COOKIE[$cookie_city];

    // Establecer las cookies con los nuevos valores
    setcookie($cookie_name, $user_name, time() + 3600, "/");
    setcookie($cookie_language, $selected_language, time() + 3600, "/");
    setcookie($cookie_color, $selected_color, time() + 3600, "/");
    setcookie($cookie_city, $selected_city, time() + 3600, "/");
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario con Cookies</title>
</head>
<body>

<h1>Formulario</h1>

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
