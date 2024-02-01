<?php 
// Óscar del Campo Carpio 

// Iniciamos la Sesión
session_start();

$salarioMaximo = max($_SESSION["array"]);
$salarioMinimo = min($_SESSION["array"]);

// Muestra la información por pantala. El Usuario, Perfil/Rol, Nivel de Acceso, y los Datos.
echo "<h3> Información de la Sesión </h3>";
echo "<b>Usuario actual:</b> " . $_SESSION["usuario"] . "<br>";
echo "<b>Perfil acutal:</b> " .$_SESSION["rol"] . "<br>";
echo "<b>Acceso a datos de cáclculo:</b> A Máximo y a Mínimo. <br>";

echo "<br>";

echo "<h3> Información Calculada </h3>";
echo "<b>Salario Máximo:</b> ". $salarioMaximo ."€<br>";
echo "<b>Salario Mínimo:</b> ". $salarioMinimo ."€<br>";

// Cuando se envía el formulario, reenvía al principal (funciona a modo de volver atrás).
if (isset($_POST["cerrar"])){
    session_unset();
    header("Location: tokens1.php");
}

echo "<br><br>";

// Comprobamos que el código del token sea el mismo o no.
if (hash_equals($_SESSION['codToken'], $_SESSION['token']) === false) {
    echo "Brecha de Seguridad. El token no coincide <br>";
} else {
    echo "Seguridad Funcional. Token funcional <br>";
}

?>


<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8" />

    <title>Nóminas</title>
</head>


<body>
    <br><br>
    <h2>Nóminas</h2>
    <br>

    <form action="tokens1.php" method="post">
        <input type="submit" value="Cerrar Sesión" name="cerrar">
        <input type="submit" value="Cambiar SID" name="cambiarSID" <?php $_SESSION["token"] = bin2hex(openssl_random_pseudo_bytes(24))?>> <br><br>
    </form>
</body>

</html>