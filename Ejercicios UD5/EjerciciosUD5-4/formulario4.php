<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Alumnos - Formulario de registro</title>
</head>
<body>
    <h1>Óscar del Campo - Formulario de registro 4</h1>
    <form method="POST" action="oscarForm4.php">

        <fieldset>
        <legend>Datos Personales:</legend>
            <label for="nombre">Nombre:</label>
            <input placeholder="Escrba su Nombre" type="text" id="nombre" name="nombre" maxlength="50" required><br><br>
            
            <label for="apellidos">Apellidos:</label>
            <input placeholder="Escrba sus Apellidos"  type="text" id="apellidos" name="apellidos" maxlength="200" required><br><br>

            <label for="email">Correo Electrónico:</label>
            <input placeholder="usuario@empresa.com"  type="email" id="email" name="email" maxlength="250" required><br><br>

            <label for="nombreUsuario">Nombre de usuario:</label>
            <input placeholder="Escrba su Nombre de Usuario"  type="text" id="nombreUsuario" name="nombreUsuario" maxlength="5" required><br><br>

            <label for="contraseña">Contraseña:</label>
            <input placeholder="Escrba su password"  type="password" id="contraseña" name="contraseña" maxlength="15" required><br><br>
            
            <label>Sexo:</label>
            <input type="radio" id="hombre" name="sexo" value="hombre" checked required>
            <label for="hombre">Hombre</label>
            <input type="radio" id="mujer" name="sexo" value="mujer" required>
            <label for "mujer">Mujer</label><br><br>

        </fieldset><br><br>

        <fieldset>
        <legend>Datos de contacto:</legend>
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

        </fieldset><br><br>

        <fieldset>
        <legend>Datos de la incidencia:</legend>
        <label for="tipoIncidencia">Tipo de incidencia:</label>
        <select id="tipoIncidencia" name="tipoIncidencia" required>
            <option value="Telefono fijo">Teléfono fijo</option>
            <option value="Telefono móvil">Teléfono móvil</option>
            <option value="Internet">Internet</option>
            <option value="Televisión">Televisión</option>
        </select><br><br>


        <label for="comentario">Descripción de la incidencia:</label>
        <textarea placeholder="Describa la incidencia..."  id="comentario" name="comentario" rows="4" cols="40"></textarea><br><br>
        
        </fieldset><br><br>
        

        <fieldset>
        <input type="submit" value="Enviar">
        <input type="reset" value="Limpiar">
        </fieldset>

    </form>
</body>
</html>
