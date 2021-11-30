<!DOCTYPE html>
<html lang="en">
    <head>
        <title>7</title>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    </head>
    <body>
        <blockquote class="w3-panel w3-leftbar w3-light-grey">
            <p class="w3-large">
                <i>7. Mostrar el nombre del fichero que se está ejecutando.</i></p>
            <p>- OUTMANE BOUHOU -</p>
            <?php
            /*
             * Autor: Outmane Bouhou
             * Fecha: 15/10/2021
             * Ejercicio: 7. Mostrar el nombre del fichero que se está ejecutando.
             */
            echo"<h3>El nombre del fichero que se está ejecutando :</h3> " . basename($_SERVER['PHP_SELF']) . "<br>";
            echo " y se encuantra en : <strong>" . $_SERVER['SCRIPT_NAME'] . "</strong>";
            ?>

            <br><br>
        </blockquote>
    </body>
</html>

