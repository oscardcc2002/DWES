<?php
session_start();

$nombre = $_POST['nombre'];
$rol = $_POST['rol'];
$salarios = explode(',', $_POST['salarios']);

$_SESSION['nombre'] = $nombre;
$_SESSION['rol'] = $rol;
$_SESSION['salarios'] = $salarios;

switch ($rol) {
    case 'gerente':
        header('Location: gerente.php');
        break;
    
    case 'sindicalista':
        header('Location: sindicalista.php');
        break;
    
    case 'responsable_nomina':
        header('Location: responsable_nomina.php');
        break;
    
    default:
        echo "Rol no reconocido";
        break;
}
?>
