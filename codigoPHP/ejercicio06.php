<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    </head>
    <body>
        <blockquote class="w3-panel w3-leftbar w3-light-grey">
            <p class="w3-large">
                <i>6. Operar con fechas: calcular la fecha y el día de la semana de dentro de 60 días.</i></p>
            <p>- OUTMANE BOUHOU -</p>
            <?php
            /**
             * Autor: Outmane Bouhou
             * Fecha: 15/10/2021
             * Ejercicio: 6. Operar con fechas: calcular la fecha y el día de la semana de dentro de 60 días.
             */
            /* Añadir a una fecha por ejemplo de hoy 60 dias */

            $dateTimeNow = new DateTime();

            echo '<h3 style="color:blue">Calcular la fecha y el día de la semana de dentro de 60 días.</h3>';
            echo '<strong>Ahora</strong> : ' . $dateTimeNow->format('l d-m-Y h:m:s');
            date_add($dateTimeNow, new DateInterval('P60D'));
            echo '<br> <strong>Y En 60 días</strong>: ' . $dateTimeNow->format('l d-m-Y h:m:s');
            ?>

            <br><br>
        </blockquote>
    </body>
</html>
