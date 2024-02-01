<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 24</title>
</head>
<body>

<form method="post" action="">
    <label for="salarios">Ingrese los salarios de los trabajadores (separados por comas): </label>
    <input type="text" name="salarios" id="salarios" required>
    <br>
    <label for="porcentaje">Ingrese el porcentaje de aumento: </label>
    <input type="number" name="porcentaje" id="porcentaje" required>
    <br>
    <input type="submit" value="Calcular">
</form>

<?php

    $salarios = explode(',', $_POST['salarios']);
    $porcentaje = $_POST['porcentaje'];

    function calcularSalarioAumentado($salarios, $porcentaje) {
        $salariosAumentados = [];

    foreach ($salarios as $salario) {
        $salariosAumentados[] = $salario * (1 + $porcentaje / 100);
    }

    return $salariosAumentados;
    }

    $salariosAumentados = calcularSalarioAumentado($salarios, $porcentaje);

    echo "Salarios actuales: " . implode(', ', $salarios) . "<br>";
    echo "Salarios aumentados en $porcentaje%: " . implode(', ', $salariosAumentados);

?>

</body>
</html>
