
<?php

/*
 * Autor: Outmane Bouhou
 * Fecha: 15/10/2021
 * Ejercicio: 4. Mostrar en tu página index la fecha y hora actual en Oporto formateada en portugués.
 */
echo '<h2>fecha y hora actual en Oporto formateada en portugués</h2>';
setlocale(LC_ALL, "es_ES.utf-8");
date_default_timezone_set("Europe/Lisbon");
$fecha = strftime("Hoy es %A ,%d de %B de %Y");
echo $fecha . " y la hora Es  " . date('h:i:s A');

?>

