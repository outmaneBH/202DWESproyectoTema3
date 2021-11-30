<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    </head>
    <body>
        <blockquote class="w3-panel w3-leftbar w3-light-grey">
            <p class="w3-large">
                <i>4. Mostrar en tu página index la fecha y hora actual en Oporto formateada en portugués.</i></p>
            <p>- OUTMANE BOUHOU -</p>
            <?php
            /*
             * Autor: Outmane Bouhou
             * Fecha: 15/10/2021
             * Ejercicio: 4. Mostrar en tu página index la fecha y hora actual en Oporto formateada en portugués.
             */
//La fecha y hora de España
            echo '<h3>La fecha y Hora de España</h3>';
            $oFechaesp = new DateTime(null, new DateTimeZone('Europe/Madrid'));
            setlocale(LC_ALL, "es_ES.utf-8");
            echo 'Hoy es ' . $oFechaesp->format('l') . "," . $oFechaesp->format('d') . " de " . $oFechaesp->format('F') . " del " . $oFechaesp->format('Y') . " y La hora es : " . $oFechaesp->format('H:i');

//La fecha y hora de Marruecos
            echo '<h3>La fecha y Hora de Marruecos</h3>';
            $oFechamar = new DateTime(null, new DateTimeZone('Africa/Casablanca'));
            echo 'Hoy es ' . $oFechaesp->format('l') . "," . $oFechaesp->format('d') . " de " . $oFechaesp->format('F') . " del " . $oFechaesp->format('Y') . " y La hora es : " . $oFechaesp->format('H:i');

//La fecha y hora de Portugal
            echo '<h3>La fecha y Hora de Portugal</h3>';
            $oFechamar = new DateTime(null, new DateTimeZone('Europe/Lisbon'));
            setlocale(LC_ALL, "pt_PT.UTF-8");
            echo 'Hoy es ' . $oFechamar->format('l') . "," . $oFechamar->format('d') . " de " . $oFechamar->format('F') . " del " . $oFechamar->format('Y') . " y La hora es : " . $oFechamar->format('H:i');
            ?>
            <br>
        </blockquote>
    </body>
</html>
