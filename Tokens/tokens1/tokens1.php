<?php
// Óscar del Campo Carpio 

// Iniciamos la Sesión
session_start();

// Si no está el token creado, se crea y se guarda en la sesión
if (!isset($_SESSION["token"])) {
    $_SESSION["token"] = bin2hex(openssl_random_pseudo_bytes(24));
}


$usuario = $_POST["usuario"];
$rol = $_POST["rol"];
$_SESSION['usuario'] = $_POST['usuario'];
$_SESSION['rol'] = $_POST['rol'];
$_SESSION["codToken"] = $_POST["codToken"];


// Guarda el array en la sesión para poder llamarlo desde los demás .php.
// Dependiendo del rol seleccionado, redirige al documento .php asignado a cada rol.
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $array = array("Diego" => 1000, "Dani" => 950, "Alvaro" => 921);
    $_SESSION["array"] = $array;

    switch ($rol) {
        case 'Gerente':
            header("Location: gerente.php");
            break;
        case 'Sindicalista':
            header("Location: sindicalista.php");
            break;
        case 'Responsable de Nóminas':
            header("Location: nominas.php");
            break;
    }
}

?>

<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8" />

    <title>Tokens 1 </title>
</head>

<body>
    <h2>Tokens 1</h2>
    <hr>

    <form action="tokens1.php" method="post">
        <h2>Introduzca el Usuario y el Perfil</h2>

        <!-- Línea para generar el código del token  -->
        <input type="hidden" name="codToken" value="<?php echo $_SESSION['token']; ?>">

        <label for='usuario'>Usuario:</label>
        <input type='text' name='usuario'><br><br>

        <label for="rol">Perfil:</label>
        <input type="radio" name="rol" value="Gerente">Gerente
        <input type="radio" name="rol" value="Sindicalista">Sindicalista
        <input type="radio" name="rol" value="Responsable de Nóminas">Responsable de Nóminas<br><br>

        <button type="submit">Mostrar información de Salarios</button>
    </form>
</body>

</html>