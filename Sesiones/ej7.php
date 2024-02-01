<?php
// Óscar del Campo Carpio

// Nombre de las sesiones
$session_attempts = "user_attempts";
$session_entered_passwords = "entered_passwords";

// Combinación correcta
$correct_combination = 1234;

// Inicializar intentos y contraseñas introducidas
session_start();

if (!isset($_SESSION[$session_attempts])) {
    $_SESSION[$session_attempts] = 0;
}

if (!isset($_SESSION[$session_entered_passwords])) {
    $_SESSION[$session_entered_passwords] = array();
}

// Verificar si se ha enviado el formulario
if (isset($_POST["Abrir"])) {
    $entered_combination = $_POST['combinacion'];
    $attempts = $_SESSION[$session_attempts];
    $entered_passwords = $_SESSION[$session_entered_passwords];

    // Incrementar el número de intentos
    $attempts++;

    // Almacenar la combinación actual en la sesión
    $entered_passwords[] = $entered_combination;

    $_SESSION[$session_attempts] = $attempts;
    $_SESSION[$session_entered_passwords] = $entered_passwords;

    // Comprobar la combinación
    if ($entered_combination == $correct_combination) {
        echo "<p style='color: green;'>La caja fuerte se ha abierto satisfactoriamente</p>";
    } elseif ($attempts < 4) {
        echo "<p style='color: red;'>Lo siento, esa no es la combinación. Llevas " . $attempts . " intentos</p>";
    } else {
        echo "<p style='color: red;'>Has agotado el número de intentos</p>";
    }

    // Mostrar contraseñas introducidas
    if (!empty($entered_passwords)) {
        echo "<p>Contraseñas introducidas:</p>";
        echo "<ul>";
        foreach ($entered_passwords as $password) {
            echo "<li>" . $password . "</li>";
        }
        echo "</ul>";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Control de acceso a caja fuerte</title>
</head>
<body>
    <h1>Control de acceso a caja fuerte</h1>
    <form method="post">
        <input type="number" name="combinacion" min="1000" max="9999" placeholder="Introduce la combinación" required>
        <button type="submit" value="Abrir" name="Abrir">Enviar</button>
    </form>
</body>
</html>
