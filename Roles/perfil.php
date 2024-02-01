<?php
// Iniciar o reanudar la sesión
session_start();

// Verificar si se han almacenado las sesiones
if (isset($_SESSION['nombre'])) {
    $nombre = $_SESSION['nombre'];
    $apellidos = $_SESSION['apellidos'];
    $asignatura = $_SESSION['asignatura'];
    $grupo = $_SESSION['grupo'];
    $edad = $_SESSION['edad'];
    $cargo = $_SESSION['cargo'];

    // Determinar el perfil según las condiciones proporcionadas
    $perfil = '';
    if ($edad === 'menor' && $cargo) {
        $perfil = 'Delegado';
    } elseif ($edad === 'menor' && !$cargo) {
        $perfil = 'Estudiante';
    } elseif ($edad === 'mayor' && !$cargo) {
        $perfil = 'Profesor';
    } elseif ($edad === 'mayor' && $cargo) {
        $perfil = 'Director';
    }
} else {
    // Redirigir a la página del formulario si no hay sesiones almacenadas
    header('Location: ej2.php');
    exit;
}

// Mostrar el saludo y la información del perfil
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Bienvenido al Perfil</title>
</head>
<body>
    <h1>Bienvenido, <?php echo "$nombre $apellidos"; ?></h1>
    <p>Asignatura: <?php echo $asignatura; ?></p>
    <p>Grupo: <?php echo $grupo; ?></p>
    <p>Edad: <?php echo ($edad === 'mayor') ? 'Mayor de edad' : 'Menor de edad'; ?></p>
    <p>Cargo: <?php echo ($cargo) ? 'Con cargo' : 'Sin cargo'; ?></p>
    <p>Perfil: <?php echo $perfil; ?></p>
    
    <!-- Botón para cerrar sesión -->
    <form method="post" action="cerrar_sesion2.php">
        <input type="submit" value="Cerrar Sesión">
    </form>
</body>
</html>
