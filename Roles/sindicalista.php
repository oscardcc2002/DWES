<?php
session_start();

if (!isset($_SESSION['nombre']) || $_SESSION['rol'] !== 'sindicalista') {
    header('Location: ej1.php');
    exit;
}

$nombre = $_SESSION['nombre'];
$salarios = $_SESSION['salarios'];
$promedio = array_sum($salarios) / count($salarios);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Bienvenido Sindicalista</title>
</head>
<body>

<h1>Bienvenido, Sindicalista <?php echo $nombre; ?></h1>
<p>Aquí puedes ver el resultado de salario medio:</p>
<p>Promedio: <?php echo $promedio; ?></p>

<form method="post" action="cerrar_sesion.php">
    <input type="submit" value="Cerrar Sesión">
</form>

</body>
</html>
