<?php
/** 
 * @author Oscar del Campo
 */

date_default_timezone_set('Europe/Madrid');
setlocale(LC_TIME, 'es_ES');

$fechaHoraDeseada = readline("Ingresa la fecha y hora deseada en el formato A-m-d H:m:s: ");

$fechaHoraDeseadaObj = new DateTime($fechaHoraDeseada);
$fechaHoraActualObj = new DateTime();

if ($fechaHoraDeseadaObj > $fechaHoraActualObj) {
    $interval = $fechaHoraActualObj->diff($fechaHoraDeseadaObj);
    $año = $interval->y;
    $meses = $interval->m;
    $dias = $interval->d;
    $horas = $interval->h;
    $minutos = $interval->i;
    $segundos = $interval->s;

    echo "Faltan ";
    if ($año > 0) {
        echo "$año año(s) ";
    }
    if ($meses > 0) {
        echo "$meses mes(es) ";
    }
    if ($dias > 0) {
        echo "$dias día(s) ";
    }
    if ($horas > 0) {
        echo "$horas hora(s) ";
    }
    if ($minutos > 0) {
        echo "$minutos minuto(s) ";
    }
    if ($segundos > 0) {
        echo "$segundos segundo(s) ";
    }
    echo "para el momento deseado.\n";
} else {
    echo "El momento deseado ya ha pasado.\n";
}
?>
