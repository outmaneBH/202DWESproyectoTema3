
    <?php
       /*
 * Autor: Outmane Bouhou
 * Fecha: 15/10/2021
 * Ejercicio: 3. Mostrar en tu página index la fecha y hora actual formateada en castellano. (Utilizar cuando sea posible la clase DateTime).
  */
echo '<h3>Fecha con date() :</h3>';
    setlocale(LC_TIME, "es_ES");
    date_default_timezone_set("Europe/Madrid");
    $fecha = strftime("Hoy es %A ,%d de %B de %Y");
    echo $fecha . " y la hora Es  " . date('h:i:s A');
    echo '<h3>Fecha con DateTime :</h3>';

    $mifecha = date("d-m-y");
    //$date= DateTime::createFromFormat('y-m-d', $newFecha);
    $date = new DateTime($mifecha);
    echo $date->format('y/m/d h:i:s A');

    ?>


