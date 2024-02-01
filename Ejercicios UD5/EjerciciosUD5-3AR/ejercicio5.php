<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Control de acceso a caja fuerte</title>
</head>
<body>
  <h1>Control de acceso a caja fuerte</h1>
  <form method="post">
    <input type="number" name="combinacion" min="1000" max="9999" placeholder="Introduce la combinación">
    <button type="submit" value="Abrir" name="Abrir">Enviar</button>
  </form>

  <?php


$combinacion = 1234;

if (!isset($GLOBALS["intentos"])) {
  $GLOBALS["intentos"] = 0;
}

if(isset ($_POST["Abrir"])){

  $combinacionIntroducida = $_POST['combinacion'];

  if ($combinacionIntroducida == $combinacion) {
    echo "<p style='color: green;'>La caja fuerte se ha abierto satisfactoriamente</p>";

  } else if( $GLOBALS["intentos"] < 4) {
    //La variable globals no se actualiza cuando se envía el formulario
    $GLOBALS["intentos"]++;
    print_r($GLOBALS['intentos']);

    echo "<p style='color: red;'>Lo siento, esa no es la combinación llevas " . $GLOBALS['intentos'] . "  intentos</p>";
  }

  if ($intentos == 4) {
    echo "<p style='color: red;'>Has agotado el número de intentos</p>";
  }
}

?>

</body>
</html>