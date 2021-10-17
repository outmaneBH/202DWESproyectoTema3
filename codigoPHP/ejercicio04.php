
   <?php
   /*
 * Autor: Outmane Bouhou
 * Fecha: 15/10/2021
 * Ejercicio: 4. Mostrar en tu página index la fecha y hora actual en Oporto formateada en portugués.
  */
    date_default_timezone_set("Europe/Lisbon");
    $fecha = strftime("Hoy es %A ,%d de %B de %Y");
     echo $fecha . " y la hora Es  " . date('h:i:s A');
    ?>

