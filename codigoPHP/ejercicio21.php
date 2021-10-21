<?php
/*
 * Autor: Outmane Bouhou
 * Fecha: 21/10/2021
 * Ejercicio:21.Construir un formulario para recoger un cuestionario realizado a una persona y enviarlo a una página Tratamiento.php para que muestre
  las preguntas y las respuestas recogidas.
 */
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>OUTMANE BOUHOU:Ejercicio21</title>
        <link rel="icon" href="../webroot/media/img/fav.png" type="image/ico" sizes="16x16">


    </head>
    <form action="tratamiento.php" method="POST">
        <label>Cual es tu nombre :</label><br>
        <input type="text" name="nombre"/><br><br>
        <label>Cual es tu altura :</label><br>
        <input type="text" name="altura"/><br><br>
  
        <input type="submit" name="submitbtn" value="Enviar datos"/>
    </form>
    <body>
    </body>
</html>








