<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Resultados del Formulario</title>
</head>
<body>
    <?php
        $nombre = $_GET["nombre"] ?? '';
        $apellidos = $_GET["apellidos"] ?? '';
        $sexo = $_GET["sexo"] ?? '';
        $email = $_GET["email"] ?? '';
        $provincia = $_GET["provincia"] ?? '';
        $novedades = isset($_GET["novedades"]) ? "Sí" : "No";
        $condiciones = isset($_GET["condiciones"]) ? "Aceptado" : "No aceptado";
    ?>

    <h2>Resultado del formulario</h2>
    
    <p><i><b>Nombre:</b></i> <b><?= strtoupper($nombre) ?></b></p>
    <p><i><b>Apellidos:</b></i> <b><?= strtoupper($apellidos) ?></b></p>
    <p><i><b>Sexo:</b></i> <b><?= strtoupper($sexo) ?></b></p>
    <p><i><b>Correo Electrónico:</b></i> <b><?= strtoupper($email) ?></b></p>
    <p><i><b>Provincia:</b></i> <b><?= strtoupper($provincia) ?></b></p>
    <p><i><b>Deseo recibir información sobre novedades y ofertas:</b></i> <b><?= strtoupper($novedades) ?></b></p>
    <p><i><b>Declaro haber leído y aceptar las condiciones generales del programa y la normativa sobre protección de datos:</b></i> <b><?= strtoupper($condiciones) ?></b></p>
</body>
</html>
