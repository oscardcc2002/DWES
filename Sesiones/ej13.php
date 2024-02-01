<?php
// Iniciar o reanudar la sesión
// Óscar del Campo Carpio
session_start();

// Obtener los datos del formulario o inicializar variables
$nombre = $_SESSION['nombre'] ?? '';
$contrasena = $_SESSION['contrasena'] ?? '';
$email = $_SESSION['email'] ?? '';
$nivelEstudios = $_SESSION['nivelEstudios'] ?? '';
$nacionalidad = $_SESSION['nacionalidad'] ?? '';
$idiomas = $_SESSION['idiomas'] ?? [];
$fotoNombre = $_SESSION['foto_nombre'] ?? '';
$fotoExtension = $_SESSION['foto_extension'] ?? '';
$fotoRuta = $_SESSION['foto_ruta'] ?? '';
$fotoTamano = $_SESSION['foto_tamano'] ?? '';

// Validar los datos y almacenar en sesiones
$errores = array();

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

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : '';
    $contrasena = isset($_POST['contrasena']) ? $_POST['contrasena'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $nivelEstudios = isset($_POST['nivelEstudios']) ? $_POST['nivelEstudios'] : '';
    $nacionalidad = isset($_POST['nacionalidad']) ? $_POST['nacionalidad'] : '';
    $idiomas = isset($_POST['idiomas']) ? $_POST['idiomas'] : [];

    // Validar la foto
    $foto = isset($_FILES['foto']) ? $_FILES['foto'] : [];

    if ($foto['error'] === UPLOAD_ERR_OK) {
        $fileType = strtolower(pathinfo($foto['name'], PATHINFO_EXTENSION));
        $allowedTypes = array('jpg', 'jpeg', 'gif', 'png');

        if (!in_array($fileType, $allowedTypes)) {
            $errores[] = 'La foto debe tener una extensión válida (jpg, jpeg, gif, png).';
        }

        if ($foto['size'] > 50000) {
            $errores[] = 'La foto debe tener un tamaño máximo de 50 KB.';
        } else {
            // Almacenar datos de la foto en la sesión
            $_SESSION['foto_nombre'] = $foto['name'];
            $_SESSION['foto_extension'] = $fileType;
            $_SESSION['foto_ruta'] = $foto['tmp_name'];
            $_SESSION['foto_tamano'] = $foto['size'];
        }
    } else {
        $errores[] = 'Error al subir la foto.';
    }
}

// Mostrar errores si los hay o mostrar datos almacenados en sesiones
?>
<!DOCTYPE html>
<html lang='es'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Formulario de Recogida de Datos - Página 1</title>
</head>
<body>

<h1>Formulario de Recogida de Datos - Página 1</h1>

<?php if ($_SERVER['REQUEST_METHOD'] === 'POST' && empty($errores)) : ?>
    <h2>Datos Recibidos:</h2>
    <p>Nombre: <?php echo $nombre; ?></p>
    <p>Contraseña: <?php echo $contrasena; ?></p>
    <p>Email: <?php echo $email; ?></p>
    <p>Nivel de Estudios: <?php echo $nivelEstudios; ?></p>
    <p>Nacionalidad: <?php echo $nacionalidad; ?></p>
    <p>Idiomas: <?php echo implode(', ', $idiomas); ?></p>
    <p>Foto: <?php echo $fotoNombre; ?> (Tamaño: <?php echo $fotoTamano; ?> bytes)</p>
<?php else : ?>
    <?php if (!empty($errores)) : ?>
        <h2>Errores:</h2>
        <ul>
            <?php foreach ($errores as $error) : ?>
                <li><?php echo $error; ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>

    <form method='post' enctype='multipart/form-data'>
        <label for='nombre'>Nombre completo:</label>
        <input type='text' id='nombre' name='nombre' value='<?php echo $nombre; ?>' required>
        <br>

        <label for='contrasena'>Contraseña (mínimo 6 caracteres):</label>
        <input type='password' id='contrasena' name='contrasena' value='<?php echo $contrasena; ?>' required>
        <br>

        <label for='nivelEstudios'>Nivel de Estudios:</label>
        <select id='nivelEstudios' name='nivelEstudios' required>
            <option value='sinEstudios' <?php echo ($nivelEstudios === 'sinEstudios') ? 'selected' : ''; ?>>Sin estudios</option>
            <option value='educacionSecundaria' <?php echo ($nivelEstudios === 'educacionSecundaria') ? 'selected' : ''; ?>>Educación Secundaria Obligatoria</option>
            <option value='bachillerato' <?php echo ($nivelEstudios === 'bachillerato') ? 'selected' : ''; ?>>Bachillerato</option>
            <option value='formacionProfesional' <?php echo ($nivelEstudios === 'formacionProfesional') ? 'selected' : ''; ?>>Formación Profesional</option>
            <option value='estudiosUniversitarios' <?php echo ($nivelEstudios === 'estudiosUniversitarios') ? 'selected' : ''; ?>>Estudios Universitarios</option>
        </select>
        <br>

        <label for='nacionalidad'>Nacionalidad:</label>
        <select id='nacionalidad' name='nacionalidad' required>
            <option value='espanola' <?php echo ($nacionalidad === 'espanola') ? 'selected' : ''; ?>>Española</option>
            <option value='otra' <?php echo ($nacionalidad === 'otra') ? 'selected' : ''; ?>>Otra</option>
        </select>
        <br>

        <label>Idiomas:</label>
        <input type='checkbox' id='espanol' name='idiomas[]' value='espanol' <?php echo in_array('espanol', $idiomas) ? 'checked' : ''; ?>>
        <label for='espanol'>Español</label>
        <input type='checkbox' id='ingles' name='idiomas[]' value='ingles' <?php echo in_array('ingles', $idiomas) ? 'checked' : ''; ?>>
        <label for='ingles'>Inglés</label>
        <input type='checkbox' id='frances' name='idiomas[]' value='frances' <?php echo in_array('frances', $idiomas) ? 'checked' : ''; ?>>
        <label for='frances'>Francés</label>
        <input type='checkbox' id='aleman' name='idiomas[]' value='aleman' <?php echo in_array('aleman', $idiomas) ? 'checked' : ''; ?>>
        <label for='aleman'>Alemán</label>
        <input type='checkbox' id='italiano' name='idiomas[]' value='italiano' <?php echo in_array('italiano', $idiomas) ? 'checked' : ''; ?>>
        <label for='italiano'>Italiano</label>
        <br>

        <label for='email'>Email:</label>
        <input type='text' id='email' name='email' value='<?php echo $email; ?>' required>
        <br>

        <label for='foto'>Adjuntar Foto (sólo extensiones jpg, gif y png, tamaño máximo 50 KB):</label>
        <input type='file' id='foto' name='foto' accept='.jpg, .jpeg, .gif, .png' required>
        <br>

        <input type='submit' value='Enviar'>
        <input type='reset' value='Borrar'>
    </form>
<?php endif; ?>

</body>
</html>
