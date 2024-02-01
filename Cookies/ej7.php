<?php
//Óscar del Campo Carpio

$cookie_password = "user_password";
$cookie_attempts = "user_attempts";
$cookie_entered_passwords = "entered_passwords";

// Combinación correcta
$correct_combination = 1234;

// Inicializar intentos y contraseñas introducidas
if (!isset($_COOKIE[$cookie_attempts])) {
    setcookie($cookie_attempts, 0, time() + 3600, "/");
}

if (!isset($_COOKIE[$cookie_entered_passwords])) {
    setcookie($cookie_entered_passwords, "", time() + 3600, "/");
}

// Verificar si se ha enviado el formulario
if (isset($_POST["Abrir"])) {
    $entered_combination = $_POST['combinacion'];
    $attempts = $_COOKIE[$cookie_attempts];
    $entered_passwords = $_COOKIE[$cookie_entered_passwords];

    // Incrementar el número de intentos
    $attempts++;

    // Almacenar la combinación actual en la cookie
    $entered_passwords .= $entered_combination . ",";

    setcookie($cookie_attempts, $attempts, time() + 3600, "/");
    setcookie($cookie_entered_passwords, $entered_passwords, time() + 3600, "/");

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
        $entered_passwords_array = explode(",", $entered_passwords);
        array_pop($entered_passwords_array); // Eliminar el último elemento vacío

        echo "<p>Contraseñas introducidas:</p>";
        echo "<ul>";
        foreach ($entered_passwords_array as $password) {
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
