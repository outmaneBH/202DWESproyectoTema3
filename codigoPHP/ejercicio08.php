<!DOCTYPE html>
<html lang="en">
    <head>
        <title>8</title>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    </head>
    <body>
        <blockquote class="w3-panel w3-leftbar w3-light-grey">
            <p class="w3-large">
                <i>8. Mostrar la dirección IP del equipo desde el que estás accediendo.</i></p>
            <p>- OUTMANE BOUHOU -</p>
            <?php
            /*
             * Autor: Outmane Bouhou
             * Fecha: 15/10/2021
             * Ejercicio: 8. Mostrar la dirección IP del equipo desde el que estás accediendo.
             */
            echo "<h4>IP del equipo desde el que estás accediendo es:" . $_SERVER['REMOTE_ADDR'] . "</h4>";
            ?>
            <br><br>
        </blockquote>
    </body>
</html>
