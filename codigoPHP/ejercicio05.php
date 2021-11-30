<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    </head>
    <body>
        <blockquote class="w3-panel w3-leftbar w3-light-grey">
            <p class="w3-large">
                <i>5. Inicializar y mostrar una variable que tiene una marca de tiempo (timestamp)</i></p>
            <p>- OUTMANE BOUHOU -</p>
            <?php
            /*
             * Autor: Outmane Bouhou
             * Fecha: 15/10/2021
             * Ejercicio: 5. Inicializar y mostrar una variable que tiene una marca de tiempo (timestamp)
             */

            /* mostrando timestamp() de hoy */

            echo '<h2>Timestamp() de hoy :</h2>';
            $ofecha = new DateTime();
            echo $ofecha->getTimestamp();

            /* formatear el timestamp() de hoy a una fecha completa */

            echo '<h2>Otro ejemplo : </h2>';
            $ofechaActual = new DateTime();
            echo $ofechaActual->format('U = Y-m-d H:i:s') . "\n";
            ?>

        </blockquote>
    </body>
</html>