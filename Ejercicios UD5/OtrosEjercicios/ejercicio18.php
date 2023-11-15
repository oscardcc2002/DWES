<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora Estadística</title>
</head>
<body>
    <h1>Calculadora Estadística</h1>

    <form method="post">
        <h2>Introduce los números (separados por comas o espacios):</h2>
        <input type="text" name="numeros" required>
        <br>
        <label><input type="checkbox" name="calcularMedia"> Calcular Media</label>
        <br>
        <label><input type="checkbox" name="calcularModa"> Calcular Moda</label>
        <br>
        <label><input type="checkbox" name="calcularMediana"> Calcular Mediana</label>
        <br>
        <input type="submit" value="Calcular">
    </form>

    <?php

    $numeros = isset($_POST['numeros']) ? explode(',', $_POST['numeros']) : array();
    $numeros = array_map('intval', $numeros); // Convert all elements to integers
    function calcularMedia($numeros) {
        return array_sum($numeros) / count($numeros);
    }

    function calcularModa($numeros) {
        $frecuencias = array_count_values($numeros);
        $modas = array_keys($frecuencias, max($frecuencias));
        return $modas;
    }

    function calcularMediana($numeros) {
        sort($numeros);
        $count = count($numeros);
        $middle = floor(($count - 1) / 2);

        if ($count % 2 == 0) {
            return ($numeros[$middle] + $numeros[$middle + 1]) / 2;
        } else {
            return $numeros[$middle];
        }
    }

  
        if (!empty($numeros)) {
            echo "<h2>Resultados:</h2>";

            if (isset($_POST['calcularMedia'])) {
                $media = calcularMedia($numeros);
                echo "Media: $media<br>";
            }

            if (isset($_POST['calcularModa'])) {
                $moda = calcularModa($numeros);
                echo "Moda: ";
                foreach ($moda as $valor) {
                    echo "$valor ";
                }
                echo "<br>";
            }

            if (isset($_POST['calcularMediana'])) {
                $mediana = calcularMediana($numeros);
                echo "Mediana: $mediana<br>";
            }
        } else {
            echo "<p>No se han introducido números.</p>";
        }
    
    ?>
</body>
</html>
