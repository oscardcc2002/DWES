<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de multiplicar</title>
</head>
<body>
    <form method="post">
    <label for="numer_tabla">Inserta un número para que te diga su tabla de multiplicar:</label>
        <input type="range" id="numer_tabla" name="numer_tabla" min="1" max="10" required>
        <output for="numer_tabla" id="numero_seleccionado"></output>

        <input type="submit" value="Calcular tabla de multiplicar">
    </form>


    
    <?php
/** 
 * @author Oscar del Campo
 */

 $numero = $_POST['numer_tabla'];

 if ($numero > 0) {
    echo "<p>Tabla de multiplicar del $numero:</p>";
    echo "<ul>";
    
    for ($i = 1; $i <= 10; $i++) {
        $resultado = $numero * $i;
        echo "<li>$numero x $i = $resultado</li>";
    }
    
    echo "</ul>";
} else {
    echo "<p>Ingresa un número válido mayor que cero.</p>";
}

?>

</body>
</html>