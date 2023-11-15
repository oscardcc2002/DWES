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
    $apellidos = isset($_GET['apellidos']) ? $_GET['apellidos'] : '';
    $edad = isset($_GET['edad']) ? $_GET['edad'] : '';
    $peso = isset($_GET['peso']) ? $_GET['peso'] : '';
    $sexo = isset($_GET['sexo']) ? $_GET['sexo'] : '';
    $estadoCivil = isset($_GET['estadoCivil']) ? $_GET['estadoCivil'] : '';
    $aficiones = isset($_GET['aficiones']) ? $_GET['aficiones'] : array();
    // Mostrar los datos
    echo "Nombre: $nombre<br>";
    echo "Apellidos: $apellidos<br>";
    echo "Edad: $edad<br>";
    echo "Peso: $peso<br>";
    echo "Sexo: $sexo<br>";
    echo "Estado Civil: $estadoCivil<br>";

    echo "Aficiones:<br>";
    foreach ($aficiones as $aficion) {
        echo "- $aficion<br>";
    }

    ?>
</body>
</html>
