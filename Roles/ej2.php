<?php
// Iniciar o reanudar la sesión
session_start();

// Verificar si el formulario se ha enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recoger los datos del formulario
    $nombre = $_POST['nombre'] ?? '';
    $apellidos = $_POST['apellidos'] ?? '';
    $asignatura = $_POST['asignatura'] ?? '';
    $grupo = $_POST['grupo'] ?? '';
    $edad = $_POST['edad'] ?? '';
    $cargo = isset($_POST['cargo']) ? true : false;

    // Almacenar los datos en sesiones
    $_SESSION['nombre'] = $nombre;
    $_SESSION['apellidos'] = $apellidos;
    $_SESSION['asignatura'] = $asignatura;
    $_SESSION['grupo'] = $grupo;
    $_SESSION['edad'] = $edad;
    $_SESSION['cargo'] = $cargo;

    // Redirigir a la página del perfil correspondiente
    header('Location: perfil.php');
    exit;
}

// Mostrar el formulario si no se ha enviado
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario de Identificación</title>
</head>
<body>
    <h1>Formulario de Identificación</h1>
    <form method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>
        <br>

        <label for="apellidos">Apellidos:</label>
        <input type="text" id="apellidos" name="apellidos" required>
        <br>

        <label for="asignatura">Asignatura:</label>
        <input type="text" id="asignatura" name="asignatura" required>
        <br>

        <label for="grupo">Grupo:</label>
        <input type="text" id="grupo" name="grupo" required>
        <br>

        <label for="edad">Edad:</label>
        <select id="edad" name="edad" required>
            <option value="mayor">Mayor de edad</option>
            <option value="menor">Menor de edad</option>
        </select>
        <br>

        <label for="cargo">¿Tiene un cargo?</label>
        <input type="checkbox" id="cargo" name="cargo">
        <br>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>
