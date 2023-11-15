<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Registro</title>
</head>
<body>
    <h1>Formulario de Registro</h1>

    <form method="post">
        <label for="correo">Correo Electrónico:</label>
        <input type="text" id="correo" name="correo" required>
        <br>

        <label for="confirmar_correo">Confirmar Correo Electrónico:</label>
        <input type="text" id="confirmar_correo" name="confirmar_correo" required>
        <br>

        <label>Aceptar recibir publicidad:</label>
        <input type="radio" id="si" name="publicidad" value="si">
        <label for="si">Sí</label>
        <input type="radio" id="no" name="publicidad" value="no">
        <label for="no">No</label>
        <br>

        <input type="submit" value="Enviar">
        <input type="reset" value="Borrar">
    </form>

    <?php
$correo = $_POST['correo'];
$confirmarCorreo = $_POST['confirmar_correo'];
$publicidad = isset($_POST['publicidad']) ? $_POST['publicidad'] : "No";
$errores = array();
$url= "";

function validaRequerido($valor) {
    return trim($valor) !== '';
}

function validaEmail($valor) {
    return filter_var($valor, FILTER_VALIDATE_EMAIL) !== false;
}

if (!validaRequerido($correo)) {
    $errores[] = 'El campo correo electrónico es requerido.';
}

else if (!validaEmail($correo)) {
    $errores[] = 'El formato del correo electrónico es incorrecto.';
}else {
    $url=$url . "correo=" . $correo . "&";

}


if ($correo !== $confirmarCorreo) {
    $errores[] = "La dirección de correo no ha sido confirmada correctamente.";
}

if ($publicidad !== "si" && $publicidad !== "no") {
    $errores[] = "La opción de recibir publicidad es incorrecta.";
}else{
    $url=$url . "correo=" . $correo .  "&publicidad=" . $publicidad ;
}

if (!$errores) {
    header('Location: procesar1.php?' . $url);
    exit;
}else {
    // Muestra los errores
    echo "<h2>Errores:</h2>";
    echo "<ul>";
    foreach ($errores as $error) {
        echo "<li>$error</li>";
    }
    echo "</ul>";
}
?>
</body>
</html>
