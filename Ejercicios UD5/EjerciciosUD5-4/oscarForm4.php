<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Resultados del Formulario</title>
</head>
<body>
    <?php
        $nombre = $_POST["nombre"] ?? '';
        $apellidos = $_POST["apellidos"] ?? '';
        $email = $_POST["email"] ?? '';
        $nombreUsuario = $_POST["nombreUsuario"] ?? '';
        $contraseña = $_POST["contraseña"] ?? '';
        $sexo = $_POST["sexo"] ?? '';
        $provincia = $_POST["provincia"] ?? '';
        $horario = isset($_POST["horario"]) ? implode(", ", $_POST["horario"]) : "No se seleccionó horario";
        $comoConocido = isset($_POST["comoConocido"]) ? implode(", ", $_POST["comoConocido"]) : "No se seleccionó cómo nos ha conocido";
        $tipoIncidencia = $_POST["tipoIncidencia"] ?? '';
        $comentario = $_POST["comentario"] ?? '';
    ?>

    <h2>Resultado del formulario</h2>
    
    <p><i><b>Nombre:</b></i> <b><?= strtoupper($nombre) ?></b></p>
    <p><i><b>Apellidos:</b></i> <b><?= strtoupper($apellidos) ?></b></p>
    <p><i><b>Correo Electrónico:</b></i> <b><?= strtoupper($email) ?></b></p>
    <p><i><b>Nombre de usuario:</b></i> <b><?= strtoupper($nombreUsuario) ?></b></p>
    <p><i><b>Contraseña:</b></i> <b><?= strtoupper($contraseña) ?></b></p>
    <p><i><b>Sexo:</b></i> <b><?= strtoupper($sexo) ?></b></p>
    <p><i><b>Provincia:</b></i> <b><?= strtoupper($provincia) ?></b></p>
    <p><i><b>Horario de contacto:</b></i> <b><?= strtoupper($horario) ?></b></p>
    <p><i><b>Cómo nos ha conocido:</b></i> <b><?= strtoupper($comoConocido) ?></b></p>
    <p><i><b>Tipo de incidencia:</b></i> <b><?= strtoupper($tipoIncidencia) ?></b></p>
    <p><i><b>Comentario:</b></i> <b><?= strtoupper($comentario) ?></b></p>
</body>
</html>
