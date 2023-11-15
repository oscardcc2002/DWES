<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado del Registro</title>
</head>
<body>
    <h1>Resultado del Registro</h1>

    <?php
     
        $correo = $_GET['correo'];
        $publicidad = isset($_GET['publicidad']) ? $_GET['publicidad'] : "No";

        echo "Correo Electrónico: $correo<br>";
        echo "Aceptar recibir publicidad: $publicidad<br>";

    
    ?>
</body>
</html>
