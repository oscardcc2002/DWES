<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 23</title>
</head>
<body>

<form method="post" action="">
    <label for="salarios">Ingrese los salarios de los trabajadores (separados por comas): </label>
    <input type="text" name="salarios" id="salarios" required>
    <br>
    <label for="opcion">Seleccione la operación a realizar:</label>
    <select name="opcion" id="opcion">
        <option value="maximo">Salario Máximo</option>
        <option value="minimo">Salario Mínimo</option>
        <option value="medio">Salario Medio</option>
    </select>
    <br>
    <input type="submit" value="Calcular">
</form>

<?php

    $salarios = explode(',', $_POST['salarios']);
    $opcion = $_POST['opcion'];

    function calcularMaximo($salarios) {
        return max($salarios);
    }

    function calcularMinimo($salarios) {
        return min($salarios);
    }

    function calcularMedio($salarios) {
        return array_sum($salarios) / count($salarios);
    }

    switch ($opcion) {
        case 'maximo':
            $resultado = calcularMaximo($salarios);
            echo "El salario máximo es: $resultado";
            break;

        case 'minimo':
            $resultado = calcularMinimo($salarios);
            echo "El salario mínimo es: $resultado";
            break;

        case 'medio':
            $resultado = calcularMedio($salarios);
            echo "El salario medio es: $resultado";
            break;

        default:
            echo "Seleccione una opción válida.";
            break;
    }

?>

</body>
</html>
