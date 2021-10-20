
<?php

/*
 * Autor: Outmane Bouhou
 * Fecha: 15/10/2021
 * Ejercicio: 4. Mostrar en tu página index la fecha y hora actual en Oporto formateada en portugués.
 */
echo '<h2>fecha y hora actual en Oporto formateada en portugués</h2>';
/*setlocale(LC_ALL, "es_ES.utf-8");
date_default_timezone_set("Europe/Lisbon");
$fecha = strftime("Hoy es %A ,%d de %B de %Y");
echo $fecha . " y la hora Es  " . date('h:i:s A');*/

$oFechaHoraactual = new DateTime(null,new DateTimeZone('Europe/Lisbon'));
echo "Fecha de hoy es: ".$oFechaHoraactual->format('d/m/Y')."<br>";
echo " El dia :".$oFechaHoraactual->format('l')."<br>";
echo " y La hora :".$oFechaHoraactual->format('H:i')." horas <br>";

//La fecha y hora de Marruecos
echo '<h3>La fecha y Hora de Marruecos</h3>';
$oFechamar = new DateTime(null,new DateTimeZone('Africa/Casablanca'));
echo 'Hoy es '.$oFechamar->format('d')." de " .$oFechamar->format('F')." del ".$oFechamar->format('Y')." y La hora es : ".$oFechamar->format('H:i');
//La fecha y hora de Portugal
echo '<h3>La fecha y Hora de Portugal</h3>';
$oFechamar = new DateTime(null,new DateTimeZone('Europe/Lisbon'));
setlocale(LC_ALL, "pt_PT.UTF-8");
echo 'Hoy es '.$oFechamar->format('d')." de " .$oFechamar->format('F')." del ".$oFechamar->format('Y')." y La hora es : ".$oFechamar->format('H:i'); 


?>

