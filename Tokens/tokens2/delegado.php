<?php 
// Óscar del Campo Carpio 
// Iniciamos la Sesión
session_start();


echo "<h3> Información de la Sesión </h3>";
echo "<b>Nombre actual:</b> " . $_SESSION["nombre"] . "<br>";
echo "<b>Apellido acutal:</b> " .$_SESSION["apellidos"] . "<br>";
echo "<b>Asignatura acutal:</b> " .$_SESSION["asignatura"] . "<br>";
echo "<b>Grupo acutal:</b> " .$_SESSION["grupo"] . "<br>";
echo "<b>Edad acutal:</b> " .$_SESSION["edad"] . "<br>";


echo "<b>Acceso como delegado</b><br>";

echo "<br>";



if (isset($_POST["cerrar"])){
    session_unset();
    header("Location: tokens2.php");
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


    <title>Delegado</title>
</head>


<body>
    <br><br>
    <h2>Delegado</h2>
    <br>

    <form action="tokens2.php" method="post">
        <input type="submit" value="Cerrar Sesión" name="cerrar">
        <input type="submit" value="Cambiar SID" name="cambiarSID" <?php $_SESSION["token"] = bin2hex(openssl_random_pseudo_bytes(24))?>> <br><br>
    </form>
</body>

</html>