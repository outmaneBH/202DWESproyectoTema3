<!DOCTYPE html>
<html lang="en">
    <head>
        <title>14</title>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    </head>
    <body>
        <blockquote class="w3-panel w3-leftbar w3-light-grey">
            <p class="w3-large">
                <i>14.Comprobar las librerías que estás utilizando en tu entorno de desarrollo y explotación. Crear tu propia librería de funciones y estudiar la forma de usarla en el entorno de desarrollo y en el de explotación</i></p>
            <p>- OUTMANE BOUHOU -</p>
            <?php
            /*
             * Autor: Outmane Bouhou
             * Fecha: 19/10/2021
             * Ejercicio:14.Comprobar las librerías que estás utilizando en tu entorno de desarrollo y explotación. Crear tu propia librería de funciones y estudiar la forma de usarla en el entorno de desarrollo y en el de explotación
             */
            require_once '../core/libreriaCalcular.php';
            echo "<h3>Usar la librería que he creado con operaciones :</h3>";

//Uso de librerías para realizar operaciones 
            echo "<p>La división de dos numeros : 9 y 3  = " . dividir(9, 3) . "</p>";

            echo "<p>La suma de dos numeros : 10 y 15 = " . sumar(10, 15) . "</p>";

            echo "<p>La resta de dos numeros : 10 y 15 = " . restar(10, 15) . "</p>";

            echo "<p>La multiplicacion de dos numeros : 10 y 15 = " . multiplicar(10, 15) . "</p>";
            ?>
            <br><br>
        </blockquote>
    </body>
</html>



