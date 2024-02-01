<?php
session_start();

if ($_SESSION['rol'] !== 'gerente') {
    header('Location: ej1.php'); // Redirigir si no es un gerente
    exit;
}

$nombre = $_SESSION['nombre'];
$salarios = $_SESSION['salarios'];

// Calcular mínimo, máximo y promedio
$minimo = min($salarios);
$maximo = max($salarios);
$promedio = array_sum($salarios) / count($salarios);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Perfil Gerente</title>
</head>
<body>
    <h1>Bienvenido, Gerente <?php echo $nombre; ?></h1>
    <p>Salarios:</p>
    <ul>
        <?php foreach ($salarios as $salario) : ?>
            <li><?php echo $salario; ?></li>
        <?php endforeach; ?>
    </ul>
    <p>Mínimo salario: <?php echo $minimo; ?></p>
    <p>Máximo salario: <?php echo $maximo; ?></p>
    <p>Promedio salarial: <?php echo $promedio; ?></p>
    <form action="cerrar_sesion.php" method="post">
        <input type="submit" value="Cerrar Sesión">
    </form>
</body>
</html>
