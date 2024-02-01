<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Alumnos - Formulario de registro</title>
</head>
<body>
    <h1>Óscar del Campo - Formulario de registro 2</h1>
    <form method="POST" action="oscarForm2.php">
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

        <label for="situacion">Situación:</label>
        <select id="situacion" name="situacion[]" size="2" multiple>
            <option value="Estudiando">Estudiando</option>
            <option value="Trabajando">Trabajando</option>
            <option value="Buscando empleo">Buscando empleo</option>
            <option value="Otro">Otro</option>
        </select><br><br>

        <label for="comentario">Comentario:</label>
        <textarea id="comentario" name="comentario" rows="6" cols="60"></textarea><br><br>
        
        <label for="novedades">Deseo recibir información sobre novedades y ofertas:</label>
        <input type="checkbox" id="novedades" name="novedades" checked><br><br>
        
        <label for="condiciones">Declaro haber leído y aceptar las condiciones generales del programa y la normativa sobre protección de datos:</label>
        <input type="checkbox" id="condiciones" name="condiciones" required><br><br>
        
        <input type="submit" value="Enviar">
        <input type="reset" value="Limpiar">

    </form>
</body>
</html>
