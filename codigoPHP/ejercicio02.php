<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    </head>
    <body>
        <blockquote class="w3-panel w3-leftbar w3-light-grey">
  <p class="w3-large">
  <i>2.Inicializar y mostrar una variable heredoc.</i></p>
  <p>- OUTMANE BOUHOU -</p>

        <?php
        /*
         * Autor: Outmane Bouhou
         * Fecha: 15/10/2021
         * Ejercicio:2. Inicializar y mostrar una variable heredoc.
         */
        $sql = <<<OB
SELECT nombre, apellido1, departamento
FROM personas
FULL JOIN departamentos
WHERE personas.dep = departamentos.dep 
OB;
        echo $sql;
        ?>
  </blockquote>
    </body>
</html>

