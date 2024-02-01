<?php
//Óscar del Campo Carpio
// Nombre de las cookies
$cookie_name = "user";
$cookie_action = "action";

// Verificar si se ha enviado el formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtener los valores del formulario
    $user_name = $_POST['user_name'];
    $selected_action = $_POST['action'];

    // Obtener los valores antiguos de las cookies
    $old_user = $_COOKIE[$cookie_name];
    $old_action = $_COOKIE[$cookie_action];

    // Establecer las cookies con los nuevos valores
    setcookie($cookie_name, $user_name, time() + 3600, "/");
    setcookie($cookie_action, $selected_action, time() + 3600, "/");
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
    <p>Acción: <?php echo $selected_action; ?></p>



    <p>Valores antiguos:</p>
    <p>Usuario anterior: <?php echo $old_user; ?></p>
    <p>Acción anterior: <?php echo $old_action; ?></p>


<form method="post" action="">
    <label for="user_name">Nombre:</label>
    <input type="text" name="user_name" id="user_name" value="<?php echo $user_name; ?>" required>

    <p>¿Qué acción prefieres?</p>
    <input type="radio" name="action" value="Saludo" id="saludo" <?php echo ($selected_action === 'Saludo') ? 'checked' : ''; ?> required>
    <label for="saludo">Saludo</label>

    <input type="radio" name="action" value="Despedida" id="despedida" <?php echo ($selected_action === 'Despedida') ? 'checked' : ''; ?> required>
    <label for="despedida">Despedida</label>

    <br>

    <input type="submit" value="Enviar">
</form>

</body>
</html>
