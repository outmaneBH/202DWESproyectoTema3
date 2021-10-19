<?php 
/**
 * Autor: Outmane Bouhou
 * Fecha: 15/10/2021
 * Ejercicio: 6. Operar con fechas: calcular la fecha y el día de la semana de dentro de 60 días.
 */
 //Construcción de un DateTime:
        $dateTimeNow = new DateTime();
        echo 'Ahora: '.$dateTimeNow->format('l d-m-Y h:m:s');
        date_add($dateTimeNow, new DateInterval('P60D'));
        echo 'En 60 días: '.$dateTimeNow->format('l d-m-Y h:m:s');
      
?>


