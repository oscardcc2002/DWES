<?php
// Óscar del Campo Carpio 

// Iniciamos la Sesión
session_start();

// Si no está el token creado, se crea y se guarda en la sesión
if (!isset($_SESSION["token"])) {
    $_SESSION["token"] = bin2hex(openssl_random_pseudo_bytes(24));
}

// Verificamos si el formulario ha sido enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Almacenar los datos en sesiones
    $nombre = $_POST['nombre'] ?? '';
    $apellidos = $_POST['apellidos'] ?? '';
    $asignatura = $_POST['asignatura'] ?? '';
    $grupo = $_POST['grupo'] ?? '';
    $edad = $_POST['edad'] ?? '';
    $cargo = isset($_POST['cargo']) ? true : false;

    $_SESSION['nombre'] = $nombre;
    $_SESSION['apellidos'] = $apellidos;
    $_SESSION['asignatura'] = $asignatura;
    $_SESSION['grupo'] = $grupo;
    $_SESSION['edad'] = $edad;
    $_SESSION['cargo'] = $cargo;
    $_SESSION["codToken"] = $_POST["codToken"];

    // Dependiendo del rol seleccionado, redirige al documento .php asignado a cada rol.
    if ($edad === 'menor' && $cargo) {
        header("Location: delegado.php");
        exit;
    } elseif ($edad === 'menor' && !$cargo) {
        header("Location: estudiante.php");
        exit;
    } elseif ($edad === 'mayor' && !$cargo) {
        header("Location: profesor.php");
        exit;
    } elseif ($edad === 'mayor' && $cargo) {
        header("Location: director.php");
        exit;
    }
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario de Identificación</title>
</head>
<body>
    <h1>Formulario de Identificación</h1>
    <form action="tokens2.php" method="post">

    <input type="hidden" name="codToken" value="<?php echo $_SESSION['token']; ?>">

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