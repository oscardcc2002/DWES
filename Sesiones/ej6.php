<?php
// Óscar del Campo Carpio
// Inicializar variables
session_start();

// Verificar si se ha enviado el formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtener el valor ingresado por el usuario
    $multiplicador = $_POST['multiplicador'];

    // Verificar si el valor es numérico
    if (is_numeric($multiplicador)) {
        // Calcular la tabla de multiplicar
        $tabla = array();
        for ($i = 1; $i <= 10; $i++) {
            $resultado = $multiplicador * $i;
            $tabla[] = "$multiplicador x $i = $resultado";
        }

        // Obtener los datos anteriores almacenados en sesiones
        $tablaAnterior = isset($_SESSION['tabla']) ? $_SESSION['tabla'] : array();
        $multiplicadorAnterior = isset($_SESSION['multiplicador_actual']) ? $_SESSION['multiplicador_actual'] : "";

        // Guardar los datos en sesiones
        $_SESSION['multiplicador_anterior'] = $multiplicadorAnterior;
        $_SESSION['multiplicador_actual'] = $multiplicador;
        $_SESSION['tabla'] = $tabla;
    }
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de Multiplicar</title>
</head>
<body>

    <h1>Tabla de Multiplicar</h1>

    <form method="post">
        <label for="multiplicador">Ingresa el número para la tabla de multiplicar:</label>
        <input type="text" id="multiplicador" name="multiplicador" required>
        <button type="submit">Calcular Tabla</button>
    </form>

    <?php
    // Mostrar la tabla de multiplicar y el multiplicador anterior almacenado en sesiones
    echo "<h2>Tabla Anterior</h2>";
    echo "<p>Multiplicador Anterior: $multiplicadorAnterior</p>";
    echo "<ul>";
    foreach ($tablaAnterior as $item) {
        echo "<li>$item</li>";
    }
    echo "</ul>";

    echo "<h2>Tabla Actual</h2>";
    echo "<p>Multiplicador: $multiplicador</p>";

    // Mostrar la tabla actual
    echo "<ul>";
    foreach ($tabla as $item) {
        echo "<li>$item</li>";
    }
    echo "</ul>";
    ?>

</body>
</html>
