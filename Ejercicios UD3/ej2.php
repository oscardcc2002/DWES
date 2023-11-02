<?php
/** 
 * @author Oscar del Campo
 */

date_default_timezone_set('Europe/Madrid');
setlocale(LC_TIME, 'es_ES');

$nombresDias = array(
    'Sunday' => 'Domingo',
    'Monday' => 'Lunes',
    'Tuesday' => 'Martes',
    'Wednesday' => 'Miércoles',
    'Thursday' => 'Jueves',
    'Friday' => 'Viernes',
    'Saturday' => 'Sábado'
);

$fechaHora = date('H:i:s');
$nombreDia = date('l');

$nombreDiaEnEspanol = isset($nombresDias[$nombreDia]) ? $nombresDias[$nombreDia] : $nombreDia;

echo "Hora: $fechaHora, Día de la semana: $nombreDiaEnEspanol\n";

?>