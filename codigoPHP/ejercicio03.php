
<?php

/*
 * Autor: Outmane Bouhou
 * Fecha: 15/10/2021
 * Ejercicio: 3. Mostrar en tu página index la fecha y hora actual formateada en castellano. (Utilizar cuando sea posible la clase DateTime).
 */
echo '<h3>Fecha con date() :</h3>';
echo date_default_timezone_get().'<br>';
echo date('h:i:s A') ;
setlocale(LC_TIME, "es_ES");
date_default_timezone_set("Europe/Madrid");
$fecha = strftime("Hoy es %A ,%d de %B de %Y");
echo $fecha . " y la hora Es  " . date('h:i:s A');

echo '<h3>Fecha con DateTime :</h3>';
$mifecha = date("d-m-Y");
$oFechaHoraactual = new DateTime($mifecha);
echo $oFechaHoraactual->format('r');

?>


