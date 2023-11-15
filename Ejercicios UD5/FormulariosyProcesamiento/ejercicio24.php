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
        <input type="text" id="peso" name="peso"  required>
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
    $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : '';
    $apellidos = isset($_POST['apellidos']) ? $_POST['apellidos'] : '';
    $edad = isset($_POST['edad']) ? $_POST['edad'] : '';
    $peso = isset($_POST['peso']) ? $_POST['peso'] : '';
    $sexo = isset($_POST['sexo']) ? $_POST['sexo'] : '';
    $estadoCivil = isset($_POST['estadoCivil']) ? $_POST['estadoCivil'] : '';
    $aficiones = isset($_POST['aficiones']) ? $_POST['aficiones'] : array();

    $errores = array();
    $url = "";

    function validaRequerido($valor)
    {
        return trim($valor) !== '';
    }

    function validaRango($valor, $min, $max)
    {
        return $valor >= $min && $valor <= $max;
    }

    if (!validaRequerido($nombre)) {
        $errores[] = 'El campo Nombre es requerido.';
    } else {
        $url .= "nombre=" . $nombre . "&";
    }

    if (!validaRequerido($apellidos)) {
        $errores[] = 'El campo Apellidos es requerido.';
    } else {
        $url .= "apellidos=" . $apellidos . "&";
    }

    if (!validaRequerido($edad)) {
        $errores[] = 'El campo Edad es requerido.';
    } elseif (!validaRango($edad, 1, 150)) {
        $errores[] = 'El campo Edad debe estar entre 1 y 150 y no debe de ser una letra.';
    } else {
        $url .= "edad=" . $edad . "&";
    }

    if (!validaRequerido($peso)) {
        $errores[] = 'El campo Peso es requerido.';
    } elseif (!validaRango($peso, 10, 150)) {
        $errores[] = 'El campo Peso debe estar entre 10 y 150 y no debe de ser una letra.';
    } else {
        $url .= "peso=" . $peso . "&";
    }

    if (!validaRequerido($sexo)) {
        $errores[] = 'El campo Sexo es requerido.';
    } else {
        $url .= "sexo=" . $sexo . "&";
    }

    if (!validaRequerido($estadoCivil)) {
        $errores[] = 'El campo Estado Civil es requerido.';
    } else {
        $url .= "estadoCivil=" . $estadoCivil . "&";
    }

    if (empty($aficiones)) {
        $errores[] = 'Debe seleccionar al menos una Afición.';
    } else {
        foreach ($aficiones as $aficion) {
            $url .= "aficiones[]=$aficion&";
        }
    }

    if (!$errores) {
        header('Location: procesar3.php?' . $url);
        exit;
    } else {
        // Muestra los errores
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
