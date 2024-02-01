<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Cálculo de media, mediana y moda</title>
</head>
<body>
    <h1>Cálculo de media, mediana y moda</h1>

    <form action="" method="post">
        <label for="numeros">Números:</label>
        <input type="text" name="numeros" id="numeros" placeholder="Ingrese los números separados por comas">
        <br>
        <input type="checkbox" name="media" id="media">
        <label for="media">Media</label>
        <input type="checkbox" name="mediana" id="mediana">
        <label for="mediana">Mediana</label>
        <input type="checkbox" name="moda" id="moda">
        <label for="moda">Moda</label>
        <br>
        <input type="submit" value="Calcular">
    </form>

    <?php
    //Óscar del Campo Carpio

    // Funciones para calcular la media, mediana y moda

    function calcularMedia($numeros) {
        $sum = array_sum($numeros);
        $count = count($numeros);
        return $sum / $count;
    }

    function calcularMediana($numeros) {
        sort($numeros);
        $count = count($numeros);
        $middle = floor(($count - 1) / 2);
        if ($count % 2 == 0) {
            $median = ($numeros[$middle] + $numeros[$middle + 1]) / 2;
        } else {
            $median = $numeros[$middle];
        }
        return $median;
    }

    function calcularModa($numeros) {
        $frequencies = array_count_values($numeros);
        $maxFrequency = max($frequencies);
        $moda = array_keys($frequencies, $maxFrequency);
        return $moda[0];
    }

    if ($_POST) {
        // Obtenemos los números del formulario
        $numeros = explode(",", $_POST["numeros"]);

        // Obtenemos los cálculos seleccionados
        $calculos = array();
        if (isset($_POST["media"])) {
            $calculos[] = "Media";
        }
        if (isset($_POST["mediana"])) {
            $calculos[] = "Mediana";
        }
        if (isset($_POST["moda"])) {
            $calculos[] = "Moda";
        }

        // Guardamos los datos en una cookie
        $cookie_numeros = serialize($numeros);
        $cookie_calculos = serialize($calculos);
        setcookie("numeros", $cookie_numeros, time() + (86400 * 30), "/");
        setcookie("calculos", $cookie_calculos, time() + (86400 * 30), "/");

        // Mostramos los números y los cálculos
        echo "<h2>Números:</h2>";
        echo implode(", ", $numeros);
        echo "<h2>Cálculos:</h2>";

        // Realizamos los cálculos seleccionados
        if (in_array("Media", $calculos)) {
            echo "Media: " . calcularMedia($numeros) . "<br>";
        }
        if (in_array("Mediana", $calculos)) {
            echo "Mediana: " . calcularMediana($numeros) . "<br>";
        }
        if (in_array("Moda", $calculos)) {
            echo "Moda: " . calcularModa($numeros) . "<br>";
        }
    } 
    
    ?>
</body>
</html>
