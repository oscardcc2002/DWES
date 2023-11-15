<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Horario</title>
</head>
<body>
    <h1>Horario</h1>

    <form method="post">
        <h2>Curso</h2>
        <input type="radio" name="curso" value="DAM"> Desarrollo de aplicaciones móviles
        <input type="radio" name="curso" value="ASIR"> Administración de sistemas informáticos en red

        <h2>Módulos</h2>
        <select name="modulos[]" multiple>
            <option value="Programación">Programación</option>
            <option value="Bases de datos">Bases de datos</option>
            <option value="Entornos de desarrollo">Entornos de desarrollo</option>
            <option value="Sistemas operativos">Sistemas operativos</option>
            <option value="Redes">Redes</option>
        </select>

        <h2>Horas</h2>
        <input type="checkbox" name="horas[]" value="Lunes"> Lunes
        <input type="checkbox" name="horas[]" value="Martes"> Martes
        <input type="checkbox" name="horas[]" value="Miércoles"> Miércoles
        <input type="checkbox" name="horas[]" value="Jueves"> Jueves
        <input type="checkbox" name="horas[]" value="Viernes"> Viernes

        <input type="submit" value="Generar horario">
    </form>

    <?php
    if (isset($_POST['curso']) && isset($_POST['modulos']) && isset($_POST['horas'])) {
        $curso = $_POST['curso'];
        $modulos = $_POST['modulos'];
        $horas = $_POST['horas'];

        $horario = [];

        foreach ($modulos as $modulo) {
            for ($i = 0; $i < 5; $i++) {
                if (in_array($i, $horas)) {
                    $horario[] = array(
                        'curso' => $curso,
                        'modulo' => $modulo,
                        'dia' => $i + 1
                    );
                }
            }
        }

        echo "<table border='1'>";
        echo "<thead>";
        echo "<tr>";
        echo "<th>Curso</th>";
        echo "<th>Módulo</th>";
        echo "<th>Día</th>";
        echo "</tr>";
        echo "</thead>";
        echo "<tbody>";
        foreach ($horario as $hora) {
            echo "<tr>";
            echo "<td>{$hora['curso']}</td>";
            echo "<td>{$hora['modulo']}</td>";
            echo "<td>{$hora['dia']}</td>";
            echo "</tr>";
        }
        echo "</tbody>";
        echo "</table>";
    }
    ?>
</body>
</html>
