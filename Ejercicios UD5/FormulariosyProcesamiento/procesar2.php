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
     
     $nombre = $_GET['nombre'];
     $apellidos = $_GET['apellidos'];
     $nivelEstudios = isset($_GET['nivel_estudios']) ? $_GET['nivel_estudios'] : '';
     $situacion = isset($_GET['situacion']) ? $_GET['situacion'] : array();
     $hobbies = isset($_GET['hobbies']) ? $_GET['hobbies'] : array();
     $otrosHobbies = isset($_GET['otros_hobbies']) ? $_GET['otros_hobbies'] : '';
 
     // Mostrar los datos
     echo "Nombre: $nombre<br>";
     echo "Apellidos: $apellidos<br>";
     echo "Nivel de Estudios: $nivelEstudios<br>";
 
     echo "Situación Actual:<br>";
     foreach ($situacion as $situacionActual) {
         echo "- $situacionActual<br>";
     }
 
     echo "Hobbies:<br>";
     foreach ($hobbies as $hobbie) {
         echo "- $hobbie<br>";
     }
 
     if ($otrosHobbies !== '') {
         echo "Otros Hobbies: $otrosHobbies<br>";
     }
     ?>
</body>
</html>
