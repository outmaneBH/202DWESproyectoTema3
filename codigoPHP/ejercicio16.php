<!DOCTYPE html>
<html lang="en">

    <head>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <style>

            table{
                border-collapse: collapse; 
                width: 30%;
                text-align: center;

            }
            span{
                color: blue;
                font-weight: bold;
            }
        </style>

    </head>
    <body>
        <blockquote class="w3-panel w3-leftbar w3-light-grey">
            <p class="w3-large">
                <i> 16. Recorrer el array anterior utilizando funciones para obtener el mismo resultado.</i></p>
            <p>- OUTMANE BOUHOU -</p>
            <?php
            /*
             * Autor: Outmane Bouhou
             * Fecha: 21/10/2021
             * Ejercicio:15. Crear e inicializar un array con el sueldo percibido de lunes a domingo. Recorrer el array para calcular el sueldo percibido durante la
              semana. (Array asociativo con los nombres de los días de la semana).
             */
            /* Crear y tambien inicializar un array con dias de la semana */
            $diasDeSemana = ["Lunes" => 10,
                "Martes" => 20,
                "Miércoles" => 35,
                "Jueves" => 48,
                "Viernes" => 15,
                "Sabado" => 30,
                "Domingo" => 40];

            /* Recorrer el array de dias de semana */
            $sueldoPercibido = 0;
            echo" <table border='2px'><tr><td>Dia </td><td>Sueldo</td><tr>";
            foreach ($diasDeSemana as $dia => $sueldo) {
                echo"<tr><td>" . $dia . "</td><td>" . $sueldo . "</td>";
            }

            reset($diasDeSemana);
            while (key($diasDeSemana) != null) {
                $sueldoPercibido += current($diasDeSemana);
                next($diasDeSemana);
            }

            echo"<tr><td colspan='2'><span>El sueldo total :" . $sueldoPercibido . "</span></td></tr></table>";
            ?>
        </blockquote>
    </body>
</html>


