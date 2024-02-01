<?php
session_start();
session_unset();
session_destroy();
header('Location: ej1.php');
exit;
?>
