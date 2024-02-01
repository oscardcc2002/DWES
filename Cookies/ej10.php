<?php
//Óscar del Campo Carpio
// Nombre de la cookie
$cookie_name = "ads_preference";

// Verificar si se ha enviado el formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtener la preferencia del formulario
    $ads_preference = $_POST['ads_preference'];

    // Obtener la preferencia anterior de la cookie
    $old_ads_preference = $_COOKIE[$cookie_name];

    // Establecer la cookie con la nueva preferencia
    setcookie($cookie_name, $ads_preference, time() + 3600, "/");
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

    <p>Preferencia actual: <?php echo ($ads_preference === 'yes') ? 'Sí' : 'No'; ?></p>



    <p>Preferencia anterior: <?php echo ($old_ads_preference === 'yes') ? 'Sí' : 'No'; ?></p>


<form method="post" action="">
    <p>¿Desea recibir publicidad?</p>
    <label>
        <input type="radio" name="ads_preference" value="yes" <?php echo ($ads_preference === 'yes') ? 'checked' : ''; ?>>
        Sí
    </label>
    <label>
        <input type="radio" name="ads_preference" value="no" <?php echo ($ads_preference === 'no') ? 'checked' : ''; ?>>
        No
    </label>

    <br>

    <input type="submit" value="Guardar Preferencia">
</form>

</body>
</html>
