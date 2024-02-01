<?php
// Iniciar o reanudar la sesión
// Óscar del campo carpio
session_start();

// Obtener o inicializar los datos almacenados en sesiones
$nombre = $_SESSION['nombre'] ?? '';
$apellidos = $_SESSION['apellidos'] ?? '';
$nivelEstudios = $_SESSION['nivel_estudios'] ?? '';
$situacion = $_SESSION['situacion'] ?? [];
$hobbies = $_SESSION['hobbies'] ?? [];
$otrosHobbies = $_SESSION['otros_hobbies'] ?? '';

// Validar los datos y almacenar en sesiones
$errores = array();

function validaRequerido($valor)
{
    return trim($valor) !== '';
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!validaRequerido($_POST['nombre'])) {
        $errores[] = 'El campo Nombre es requerido.';
    } else {
        $_SESSION['nombre'] = $_POST['nombre'];
    }

    if (!validaRequerido($_POST['apellidos'])) {
        $errores[] = 'El campo Apellidos es requerido.';
    } else {
        $_SESSION['apellidos'] = $_POST['apellidos'];
    }

    if (!validaRequerido($_POST['nivel_estudios'])) {
        $errores[] = 'El campo Nivel de Estudios es requerido.';
    } else {
        $_SESSION['nivel_estudios'] = $_POST['nivel_estudios'];
    }

    if (empty($_POST['situacion'])) {
        $errores[] = 'Debe seleccionar al menos una Situación Actual.';
    } else {
        $_SESSION['situacion'] = $_POST['situacion'];
    }

    if (empty($_POST['hobbies'])) {
        $errores[] = 'Debe seleccionar al menos un Hobbie.';
    } else {
        $_SESSION['hobbies'] = $_POST['hobbies'];
    }

    if (in_array('otros', $_POST['hobbies']) && empty($_POST['otros_hobbies'])) {
        $errores[] = 'Debe especificar Otros Hobbies.';
    } else {
        $_SESSION['otros_hobbies'] = $_POST['otros_hobbies'];
    }
}

// Mostrar errores si los hay
if ($errores) {
    echo "<h2>Errores:</h2>";
    echo "<ul>";
    foreach ($errores as $error) {
        echo "<li>$error</li>";
    }
    echo "</ul>";
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Recogida de Datos - Página 1</title>
</head>
<body>
    <h1>Formulario de Recogida de Datos - Página 1</h1>

    <form method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" value="<?php echo $nombre; ?>" required>
        <br>

        <label for="apellidos">Apellidos:</label>
        <input type="text" id="apellidos" name="apellidos" value="<?php echo $apellidos; ?>" required>
        <br>

        <label for="nivel_estudios">Nivel de Estudios:</label>
        <select id="nivel_estudios" name="nivel_estudios" required>
            <option value="sin_estudios" <?php echo ($nivelEstudios === 'sin_estudios') ? 'selected' : ''; ?>>Sin estudios</option>
            <option value="primaria" <?php echo ($nivelEstudios === 'primaria') ? 'selected' : ''; ?>>Primaria</option>
            <option value="secundaria" <?php echo ($nivelEstudios === 'secundaria') ? 'selected' : ''; ?>>Secundaria</option>
            <option value="universidad" <?php echo ($nivelEstudios === 'universidad') ? 'selected' : ''; ?>>Universidad</option>
        </select>
        <br>

        <label>Situación Actual:</label>
        <input type="checkbox" id="estudiando" name="situacion[]" value="estudiando" <?php echo in_array('estudiando', $situacion) ? 'checked' : ''; ?>>
        <label for="estudiando">Estudiando</label>
        <input type="checkbox" id="trabajando" name="situacion[]" value="trabajando" <?php echo in_array('trabajando', $situacion) ? 'checked' : ''; ?>>
        <label for="trabajando">Trabajando</label>
        <input type="checkbox" id="buscando_empleo" name="situacion[]" value="buscando_empleo" <?php echo in_array('buscando_empleo', $situacion) ? 'checked' : ''; ?>>
        <label for="buscando_empleo">Buscando Empleo</label>
        <input type="checkbox" id="desempleado" name="situacion[]" value="desempleado" <?php echo in_array('desempleado', $situacion) ? 'checked' : ''; ?>>
        <label for="desempleado">Desempleado</label>
        <br>

        <label for="hobbies">Hobbies:</label>
        <input type="checkbox" id="deportes" name="hobbies[]" value="deportes" <?php echo in_array('deportes', $hobbies) ? 'checked' : ''; ?>>
        <label for="deportes">Deportes</label>
        <input type="checkbox" id="lectura" name="hobbies[]" value="lectura" <?php echo in_array('lectura', $hobbies) ? 'checked' : ''; ?>>
        <label for="lectura">Lectura</label>
        <input type="checkbox" id="viajes" name="hobbies[]" value="viajes" <?php echo in_array('viajes', $hobbies) ? 'checked' : ''; ?>>
        <label for="viajes">Viajes</label>
        <input type="checkbox" id="otros" name="hobbies[]" value="otros" <?php echo in_array('otros', $hobbies) ? 'checked' : ''; ?>>
        <label for="otros">Otros (Especificar):</label>
        <input type="text" id="otros_hobbies" name="otros_hobbies" value="<?php echo $otrosHobbies; ?>">
        <br>

        <input type="submit" value="Siguiente">
    </form>

    <?php
    // Mostrar datos almacenados en sesiones
    if (!empty($_SESSION)) {
        echo "<h2>Datos Almacenados:</h2>";
        echo "<p>Nombre: {$_SESSION['nombre']}</p>";
        echo "<p>Apellidos: {$_SESSION['apellidos']}</p>";
        echo "<p>Nivel de Estudios: {$_SESSION['nivel_estudios']}</p>";
        echo "<p>Situación Actual: " . implode(', ', $_SESSION['situacion']) . "</p>";
        echo "<p>Hobbies: " . implode(', ', $_SESSION['hobbies']) . "</p>";
        echo "<p>Otros Hobbies: {$_SESSION['otros_hobbies']}</p>";
    }
    ?>

</body>
</html>
