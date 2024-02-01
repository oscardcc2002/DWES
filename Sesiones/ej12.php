<?php
// Iniciar o reanudar la sesión
// Óscar del CAmpo Carpio
session_start();

// Obtener o inicializar los datos almacenados en sesiones
$nombre = $_SESSION['nombre'] ?? '';
$apellidos = $_SESSION['apellidos'] ?? '';
$edad = $_SESSION['edad'] ?? '';
$peso = $_SESSION['peso'] ?? '';
$sexo = $_SESSION['sexo'] ?? '';
$estadoCivil = $_SESSION['estadoCivil'] ?? '';
$aficiones = $_SESSION['aficiones'] ?? [];

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

    if (!validaRequerido($_POST['edad'])) {
        $errores[] = 'El campo Edad es requerido.';
    } elseif (!validaRango($_POST['edad'], 1, 150) || !is_numeric($_POST['edad'])) {
        $errores[] = 'El campo Edad debe estar entre 1 y 150 y no debe ser una letra.';
    } else {
        $_SESSION['edad'] = $_POST['edad'];
    }

    if (!validaRequerido($_POST['peso'])) {
        $errores[] = 'El campo Peso es requerido.';
    } elseif (!validaRango($_POST['peso'], 10, 150) || !is_numeric($_POST['peso'])) {
        $errores[] = 'El campo Peso debe estar entre 10 y 150 y no debe ser una letra.';
    } else {
        $_SESSION['peso'] = $_POST['peso'];
    }

    if (!validaRequerido($_POST['sexo'])) {
        $errores[] = 'El campo Sexo es requerido.';
    } else {
        $_SESSION['sexo'] = $_POST['sexo'];
    }

    if (!validaRequerido($_POST['estadoCivil'])) {
        $errores[] = 'El campo Estado Civil es requerido.';
    } else {
        $_SESSION['estadoCivil'] = $_POST['estadoCivil'];
    }

    if (empty($_POST['aficiones'])) {
        $errores[] = 'Debe seleccionar al menos una Afición.';
    } else {
        $_SESSION['aficiones'] = $_POST['aficiones'];
    }

    // Redirigir solo si no hay errores
    if (empty($errores)) {
        header('Location: ' . $_SERVER['PHP_SELF']);
        exit;
    }
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
        <input type="text" id="nombre" name="nombre" required>
        <br>

        <label for="apellidos">Apellidos:</label>
        <input type="text" id="apellidos" name="apellidos" required>
        <br>

        <label for="edad">Edad:</label>
        <input type="text" id="edad" name="edad" required>
        <br>

        <label for="peso">Peso (entre 10 y 150):</label>
        <input type="text" id="peso" name="peso" required>
        <br>

        <label for="sexo">Sexo:</label>
        <select id="sexo" name="sexo" required>
            <option value="masculino">Masculino</option>
            <option value="femenino">Femenino</option>
        </select>
        <br>

        <label for="estadoCivil">Estado Civil:</label>
        <select id="estadoCivil" name="estadoCivil" required>
            <option value="soltero">Soltero</option>
            <option value="casado">Casado</option>
            <option value="viudo">Viudo</option>
            <option value="divorciado">Divorciado</option>
            <option value="otro">Otro</option>
        </select>
        <br>

        <label>Aficiones:</label>
        <input type="checkbox" id="cine" name="aficiones[]" value="cine">
        <label for="cine">Cine</label>
        <input type="checkbox" id="deporte" name="aficiones[]" value="deporte">
        <label for="deporte">Deporte</label>
        <input type="checkbox" id="literatura" name="aficiones[]" value="literatura">
        <label for="literatura">Literatura</label>
        <input type="checkbox" id="musica" name="aficiones[]" value="musica">
        <label for="musica">Música</label>
        <input type="checkbox" id="comics" name="aficiones[]" value="comics">
        <label for="comics">Cómics</label>
        <input type="checkbox" id="series" name="aficiones[]" value="series">
        <label for="series">Series</label>
        <input type="checkbox" id="videojuegos" name="aficiones[]" value="videojuegos">
        <label for="videojuegos">Videojuegos</label>
        <br>

        <input type="submit" value="Enviar">
        <input type="reset" value="Borrar">
    </form>
    <?php
    // Mostrar datos almacenados en sesiones
    if (!empty($_SESSION)) {
        echo "<h2>Datos Almacenados:</h2>";
        echo "<p>Nombre: {$_SESSION['nombre']}</p>";
        echo "<p>Apellidos: {$_SESSION['apellidos']}</p>";
        echo "<p>Edad: {$_SESSION['edad']}</p>";
        echo "<p>Peso: {$_SESSION['peso']}</p>";
        echo "<p>Sexo: {$_SESSION['sexo']}</p>";
        echo "<p>Estado Civil: {$_SESSION['estadoCivil']}</p>";
        echo "<p>Aficiones: " . implode(', ', $_SESSION['aficiones']) . "</p>";
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

</body>
</html>
