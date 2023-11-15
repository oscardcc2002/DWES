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

        <label for="nivel_estudios">Nivel de Estudios:</label>
        <select id="nivel_estudios" name="nivel_estudios" required>
            <option value="sin_estudios">Sin estudios</option>
            <option value="primaria">Primaria</option>
            <option value="secundaria">Secundaria</option>
            <option value="universidad">Universidad</option>
        </select>
        <br>

        <label>Situación Actual:</label>
        <input type="checkbox" id="estudiando" name="situacion[]" value="estudiando">
        <label for="estudiando">Estudiando</label>
        <input type="checkbox" id="trabajando" name="situacion[]" value="trabajando">
        <label for="trabajando">Trabajando</label>
        <input type="checkbox" id="buscando_empleo" name="situacion[]" value="buscando_empleo">
        <label for="buscando_empleo">Buscando Empleo</label>
        <input type="checkbox" id="desempleado" name="situacion[]" value="desempleado">
        <label for="desempleado">Desempleado</label>
        <br>

        <label for="hobbies">Hobbies:</label>
        <input type="checkbox" id="deportes" name="hobbies[]" value="deportes">
        <label for="deportes">Deportes</label>
        <input type="checkbox" id="lectura" name="hobbies[]" value="lectura">
        <label for="lectura">Lectura</label>
        <input type="checkbox" id="viajes" name="hobbies[]" value="viajes">
        <label for="viajes">Viajes</label>
        <input type="checkbox" id="otros" name="hobbies[]" value="otros">
        <label for="otros">Otros (Especificar):</label>
        <input type="text" id="otros_hobbies" name="otros_hobbies">
        <br>

        <input type="submit" value="Siguiente">
    </form>
                <?php
            $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : '';
            $apellidos = isset($_POST['apellidos']) ? $_POST['apellidos'] : '';
            $nivelEstudios = isset($_POST['nivel_estudios']) ? $_POST['nivel_estudios'] : '';
            $situacion = isset($_POST['situacion']) ? $_POST['situacion'] : array();
            $hobbies = isset($_POST['hobbies']) ? $_POST['hobbies'] : array();
            $otrosHobbies = isset($_POST['otros_hobbies']) ? $_POST['otros_hobbies'] : '';

            $errores = array();
            $url = "";

            function validaRequerido($valor)
            {
                return trim($valor) !== '';
            }

            if (!validaRequerido($nombre)) {
                $errores[] = 'El campo Nombre es requerido.';
            }else {
                $url .= "nombre=" . $nombre . "&";            
            }

            if (!validaRequerido($apellidos)) {
                $errores[] = 'El campo Apellidos es requerido.';
            }else{
                $url .= "apellidos=" . $apellidos . "&";
            }

            if (!validaRequerido($nivelEstudios)) {
                $errores[] = 'El campo Nivel de Estudios es requerido.';
            }else {
                $url .= "nivel_estudios=" . urlencode($nivelEstudios) . "&";
            }

            if (empty($situacion)) {
                $errores[] = 'Debe seleccionar al menos una Situación Actual.';
            }

            if (empty($hobbies)) {
                $errores[] = 'Debe seleccionar al menos un Hobbie.';
            } elseif (in_array('otros', $hobbies) && empty($otrosHobbies)) {
                $errores[] = 'Debe especificar Otros Hobbies.';
            }

            if (!$errores) {
               
                foreach ($situacion as $situacionActual) {
                    $url .= "situacion[]=$situacionActual&";
                }
                foreach ($hobbies as $hobbie) {
                    $url .= "hobbies[]=$hobbie&";
                }
                $url .= "otros_hobbies=$otrosHobbies";
                
                header('Location: procesar2.php?' . $url);
                exit;
            }else {
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
