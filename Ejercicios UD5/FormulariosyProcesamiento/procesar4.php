<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado del Registro</title>
</head>
<body>
    <h1>Resultado del Registro</h1>

    <?php
    $nombre = isset($_GET['nombre']) ? $_GET['nombre'] : '';
    $contrasena = isset($_GET['contrasena']) ? $_GET['contrasena'] : '';
    $email = isset($_GET['email']) ? $_GET['email'] : '';
    $nivelEstudios = isset($_GET['nivelEstudios']) ? $_GET['nivelEstudios'] : '';
    $nacionalidad = isset($_GET['nacionalidad']) ? $_GET['nacionalidad'] : '';
    $idiomas = isset($_GET['idiomas']) ? $idiomas = explode(',', $_GET['idiomas']) : array();
    // Mostrar los datos
    echo "Nombre: $nombre<br>";
    echo "Contraseña: $contrasena<br>";
    echo "Edad: $email<br>";
    echo "Peso: $nivelEstudios<br>";
    echo "Sexo: $nacionalidad<br>";

    echo "Idiomas:<br>";
    foreach ($idiomas as $idioma) {
        echo "- $idioma<br>";
    }

    ?>
</body>
</html>
