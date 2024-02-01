<?php
// Iniciar o reanudar la sesión
session_start();

// Cerrar la sesión
session_unset();
session_destroy();

// Redirigir al formulario
header('Location: ej2.php');
exit;
?>
