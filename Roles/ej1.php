<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Autenticación</title>
</head>
<body>

<form method="post" action="procesar_autenticacion.php">
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" id="nombre" required>
    <br>
    <label for="rol">Seleccione su rol:</label>
    <select name="rol" id="rol">
        <option value="gerente">Gerente</option>
        <option value="sindicalista">Sindicalista</option>
        <option value="responsable_nomina">Responsable de Nóminas</option>
    </select>
    <br>
    <label for="salarios">Ingrese los salarios de los trabajadores (separados por comas):</label>
    <input type="text" name="salarios" id="salarios" required>
    <br>
    <input type="submit" value="Iniciar Sesión">
</form>

</body>
</html>
