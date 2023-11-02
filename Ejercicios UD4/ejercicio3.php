<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Alumnos - Formulario de registro</title>
</head>
<body>
    <h1>Óscar del Campo - Formulario de registro 3</h1>
    <form method="GET">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" maxlength="50" required><br><br>
        
        <label for="apellidos">Apellidos:</label>
        <input type="text" id="apellidos" name="apellidos" maxlength="200" required><br><br>

        <label for="email">Correo Electrónico:</label>
        <input type="email" id="email" name="email" maxlength="250" required><br><br>

        <label for="nombreUsuario">Nombre de usuario:</label>
        <input type="text" id="nombreUsuario" name="nombreUsuario" maxlength="5" required><br><br>

        <label for="contraseña">Contraseña:</label>
        <input type="password" id="contraseña" name="contraseña" maxlength="15" required><br><br>
        
        <label>Sexo:</label>
        <input type="radio" id="hombre" name="sexo" value="hombre" required>
        <label for="hombre">Hombre</label>
        <input type="radio" id="mujer" name="sexo" value="mujer" required>
        <label for "mujer">Mujer</label><br><br>
        
        <label for="provincia">Provincia:</label>
        <select id="provincia" name="provincia" required>
            <option value="Alicante">Alicante</option>
            <option value="Castellón">Castellón</option>
            <option value="Valencia">Valencia</option>
        </select><br><br>

        <label for="horario">Horario de contacto:</label>
        <select id="horario" name="horario[]" size="2" multiple>
            <option value="De 8 a 14 horas">De 8 a 14 horas</option>
            <option value="De 14 a 18 horas">De 14 a 18 horas</option>
            <option value="De 18 a 21 horas">De 18 a 21 horas</option>
        </select><br><br>



        <label for="comoConocido">¿Cómo nos ha conocido?</label><br>
        <input type="checkbox" id="amigo" name="comoConocido[]" value="Un amigo">
        <label for="amigo">Un amigo</label>

        <input type="checkbox" id="web" name="comoConocido[]" value="Web">
        <label for="web">Web</label>

        <input type="checkbox" id="prensa" name="comoConocido[]" value="Prensa">
        <label for="prensa">Prensa</label>

        <input type="checkbox" id="otros" name="comoConocido[]" value="Otros">
        <label for="otros">Otros</label><br><br>


        <label for="comentario">Comentario:</label>
        <textarea id="comentario" name="comentario" rows="6" cols="60"></textarea><br><br>
        
        <label for="novedades">Deseo recibir información sobre novedades y ofertas:</label>
        <input type="checkbox" id="novedades" name="novedades" checked><br><br>
        
        <label for="condiciones">Declaro haber leído y aceptar las condiciones generales del programa y la normativa sobre protección de datos:</label>
        <input type="checkbox" id="condiciones" name="condiciones" required><br><br>
        
        <input type="submit" value="Enviar">
        <input type="reset" value="Limpiar">

    </form>

    <?php
      /** 
 * @author Oscar del Campo
 */
$nombre = $_GET["nombre"];
$apellidos = $_GET["apellidos"];
$email = $_GET["email"];
$nombreUsuario = $_GET["nombreUsuario"];
$contraseña = $_GET["contraseña"];
$sexo = $_GET["sexo"];
$provincia = $_GET["provincia"];
$horario = isset($_GET["horario"]) ? implode(", ", $_GET["horario"]) : "No se seleccionó horario";
$comoConocido = isset($_GET["comoConocido"]) ? implode(", ", $_GET["comoConocido"]) : "No se seleccionó cómo nos ha conocido";
$comentario = $_GET["comentario"];
$novedades = isset($_GET["novedades"]) ? "Sí" : "No";
$condiciones = isset($_GET["condiciones"]) ? "Aceptado" : "No aceptado";

echo "<h2>Resultado del formulario</h2>";

echo "<b>Nombre:</b> " . strtoupper($nombre) . "<br>";
echo "<b>Apellidos:</b> " . strtoupper($apellidos) . "<br>";
echo "<b>Correo Electrónico:</b> " . strtoupper($email)  . "<br>";
echo "<b>Nombre de usuario:</b> " . strtoupper($nombreUsuario) . "<br>";
echo "<b>Contraseña:</b> " . strtoupper($contraseña) . "<br>";
echo "<b>Sexo:</b> " . strtoupper($sexo) . "<br>";
echo "<b>Provincia:</b> " . strtoupper($provincia). "<br>";
echo "<b>Horario de contacto:</b> " . strtoupper($horario). "<br>";
echo "<b>Cómo nos ha conocido:</b> " . strtoupper($comoConocido). "<br>";
echo "<b>Comentario:</b> " . strtoupper($comentario). "<br>";
echo "<b>Deseo recibir información sobre novedades y ofertas:</b> " . strtoupper($novedades) . "<br>";
echo "<b>Declaro haber leído y aceptar las condiciones generales del programa y la normativa sobre protección de datos:</b> " . strtoupper($condiciones);?>
</body>
</html>
