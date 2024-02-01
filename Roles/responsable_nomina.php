<?php
session_start();

if (!isset($_SESSION['nombre']) || $_SESSION['rol'] !== 'responsable_nomina') {
    header('Location: ej1.php');
    exit;
}

$nombre = $_SESSION['nombre'];
$salarios = $_SESSION['salarios'];
$minimo = min($salarios);
$maximo = max($salarios);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Bienvenido Responsable de Nóminas</title>
</head>
<body>

<h1>Bienvenido, Responsable de Nóminas <?php echo $nombre; ?></h1>
<p>Aquí puedes ver los resultados de salario mínimo y máximo:</p>
<p>Mínimo: <?php echo $minimo; ?></p>
<p>Máximo: <?php echo $maximo; ?></p>

<form method="post" action="cerrar_sesion.php">
    <input type="submit" value="Cerrar Sesión">
</form>

</body>
</html>
