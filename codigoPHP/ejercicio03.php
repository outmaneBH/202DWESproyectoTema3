
<?php

/*
 * Autor: Outmane Bouhou
 * Fecha: 15/10/2021
 * Ejercicio: 3. Mostrar en tu página index la fecha y hora actual formateada en castellano. (Utilizar cuando sea posible la clase DateTime).
 */
echo '<h3>Fecha con date() :</h3>';
echo date_default_timezone_get() . '<br>';
echo date('h:i:s A') . '<br>';

//Establecer la zona horaria en Europa/Madrid
setlocale(LC_ALL, "es_ES");
date_default_timezone_set('Europe/Madrid');
//texto
$fecha = strftime("Hoy es %A ,%d de %B de %Y");
echo $fecha ."<br>";
echo " y son  " . date('H:i')." horas <br>";
//Fechas con DateTime
$oFechaHoraactual = new DateTime(null,new DateTimeZone('Europe/Madrid'));
setlocale(LC_ALL, "es_ES");
echo "Fecha de hoy :<br> ".$oFechaHoraactual->format('d/m/Y')."<br>";
echo "Fecha con / : ".$oFechaHoraactual->format('d/m/Y')."<br>";
echo "Fecha con - : ".$oFechaHoraactual->format('d-m-Y')."<br>";
echo " Año : ".$oFechaHoraactual->format(' Y ')."<br>";
echo " El dia :".$oFechaHoraactual->format('l')."<br>";
echo " La hora :".$oFechaHoraactual->format('H:i')." horas <br>";
echo " TimeStamp :".$oFechaHoraactual->getTimestamp()."<br>";
//echo 'Mañana '.date_add($oFechaHoraactual, new DateInterval('P1D'));;

//

?>


