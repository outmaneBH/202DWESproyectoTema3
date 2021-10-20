<?php 
/**
 * Autor: Outmane Bouhou
 * Fecha: 15/10/2021
 * Ejercicio: 6. Operar con fechas: calcular la fecha y el día de la semana de dentro de 60 días.
 */
 //Construcción de un DateTime:
        $dateTimeNow = new DateTime();
        echo '<h3 style="color:blue">Calcular la fecha y el día de la semana de dentro de 60 días.</h3>';
        echo '<strong>Ahora</strong> : '.$dateTimeNow->format('l d-m-Y h:m:s');
        date_add($dateTimeNow, new DateInterval('P60D'));
        echo '<br> <strong>Y En 60 días</strong>: '.$dateTimeNow->format('l d-m-Y h:m:s');
      
?>


