<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Recogida de Datos - Página 1</title>
</head>
<body>
    <h1>Formulario de Recogida de Datos - Página 1</h1>

    <form method="post" enctype="multipart/form-data">
        <label for="nombre">Nombre completo:</label>
        <input type="text" id="nombre" name="nombre" required>
        <br>

        <label for="contrasena">Contraseña (mínimo 6 caracteres):</label>
        <input type="password" id="contrasena" name="contrasena" required>
        <br>

        <label for="nivelEstudios">Nivel de Estudios:</label>
        <select id="nivelEstudios" name="nivelEstudios" required>
            <option value="sinEstudios">Sin estudios</option>
            <option value="educacionSecundaria">Educación Secundaria Obligatoria</option>
            <option value="bachillerato">Bachillerato</option>
            <option value="formacionProfesional">Formación Profesional</option>
            <option value="estudiosUniversitarios">Estudios Universitarios</option>
        </select>
        <br>

        <label for="nacionalidad">Nacionalidad:</label>
        <select id="nacionalidad" name="nacionalidad" required>
            <option value="espanola">Española</option>
            <option value="otra">Otra</option>
        </select>
        <br>

        <label>Idiomas:</label>
        <input type="checkbox" id="espanol" name="idiomas[]" value="espanol">
        <label for="espanol">Español</label>
        <input type="checkbox" id="ingles" name="idiomas[]" value="ingles">
        <label for="ingles">Inglés</label>
        <input type="checkbox" id="frances" name="idiomas[]" value="frances">
        <label for="frances">Francés</label>
        <input type="checkbox" id="aleman" name="idiomas[]" value="aleman">
        <label for="aleman">Alemán</label>
        <input type="checkbox" id="italiano" name="idiomas[]" value="italiano">
        <label for="italiano">Italiano</label>
        <br>

        <label for="email">Email:</label>
        <input type="text" id="email" name="email" required>
        <br>

        <label for="foto">Adjuntar Foto (sólo extensiones jpg, gif y png, tamaño máximo 50 KB):</label>
        <input type="file" id="foto" name="foto" accept=".jpg, .jpeg, .gif, .png" required>
        <br>

        <input type="submit" value="Enviar">
        <input type="reset" value="Borrar">
    </form>


  <?php
$nombre = isset($_POST['nombre']) ? $_POST['nombre'] : '';
$contrasena = isset($_POST['contrasena']) ? $_POST['contrasena'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$nivelEstudios = isset($_POST['nivelEstudios']) ? $_POST['nivelEstudios'] : '';
$nacionalidad = isset($_POST['nacionalidad']) ? $_POST['nacionalidad'] : '';
$idiomas = isset($_POST['idiomas']) ? $_POST['idiomas'] : [];
$foto = isset($_FILES['foto']) ? $_FILES['foto'] : [];

$errores = array();
$url = "";

function validaRequerido($valor)
{
    return trim($valor) !== '';
}

function validaRango($valor, $min, $max)
{
    return $valor >= $min && $valor <= $max;
}

function validaEmail($valor) {
    return filter_var($valor, FILTER_VALIDATE_EMAIL) !== false;
}




if (!validaRequerido($nombre)) {
    $errores[] = 'El campo Nombre es requerido.';
} else {
    $url .= "nombre=" . $nombre . "&";
}




if (!validaRequerido($contrasena)) {
    $errores[] = 'El campo Contraseña es requerido y debe tener al menos 6 caracteres.';
} else if (strlen($contrasena) < 6) {
    $errores[] = 'La contraseña debe tener al menos 6 caracteres.';
}else {
    $url .= "contrasena=" . $contrasena . "&";
}




if (!validaRequerido($email)) {
    $errores[] = 'El campo email es requerido.';
}
else if (!validaEmail($email)) {
    $errores[] = 'El formato del email es incorrecto.';
}else {
    $url .=$url . "email=" . $email . "&";

}



if (!validaRequerido($nivelEstudios)) {
    $errores[] = 'El campo Nivel de Estudios es requerido.';
} else {
    $url .= "nivelEstudios=" . urlencode($nivelEstudios) . "&";
}


if (!validaRequerido($nacionalidad)) {
    $errores[] = 'El campo Nacionalidad es requerido.';
} else {
    $url .= "nacionalidad=" . urlencode($nacionalidad) . "&";
}

if (empty($idiomas)) {
    $errores[] = 'Debe seleccionar al menos un idioma.';
} else {
    $url .= "idiomas=" . implode(',', $idiomas) . "&";
}




if ($foto['error'] === UPLOAD_ERR_OK) {
    $fileType = strtolower(pathinfo($foto['name'], PATHINFO_EXTENSION));
    $allowedTypes = array('jpg', 'jpeg', 'gif', 'png');

    if (!in_array($fileType, $allowedTypes)) {
        $errores[] = 'La foto debe tener una extensión válida (jpg, jpeg, gif, png).';
    }

    if ($foto['size'] > 50000) {
        $errores[] = 'La foto debe tener un tamaño máximo de 50 KB.';
    }
} else {
    $errores[] = 'Error al subir la foto.';
}




if (!$errores) {
    header('Location: procesar4.php?' . $url);
    exit;
} else {
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
