<?php
/*
 * Autor: Outmane Bouhou
 * Fecha: 21/10/2021
 * Ejercicio:23. Construir un formulario para recoger un cuestionario realizado a una persona y mostrar en la misma página las preguntas y las respuestas
  recogidas; en el caso de que alguna respuesta esté vacía o errónea volverá a salir el formulario con el mensaje correspondiente
 */
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>OUTMANE BOUHOU:Ejercicio23</title>
          <link rel="stylesheet" type="text/css" href="../webroot/css/form.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="icon" href="../webroot/media/img/fav.png" type="image/ico" sizes="16x16">
    </head>
   <?php 
   //comprobar si ha pulsado el button enviar y el nombre con la altura no estan vacios
   if (isset($_POST['submitbtn']) && !empty($_POST['nombre']) && !empty($_POST['altura'])) {
       //coger el nombre
        $nombre = $_POST['nombre'];
         //coger el la altura
        $altura = $_POST['altura'];
        //mostarar los datos
        echo 'El nombre introducido  <strong> ' . $nombre . '</strong><br>';
        echo 'Y la altura es :  <strong> ' . $altura . '</strong> <br><br>';
        echo 'El contenido de $_REQUEST : <pre>';
        print_r($_REQUEST);
        echo '</pre>';
    }
 else {
        
    
   ?>
     <div class="w3-container">
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
        <label>Cual es tu nombre :</label><br>
        <input type="text" class="w3-input" name="nombre"/><br>
        <?php
        if (isset($_POST['submitbtn']) && empty($_POST['nombre'])) {
            echo "<span style='color:red'>Campo de nombre esta vacio.</span>";
        }
        ?><br><br>
        <label>Cual es tu altura :</label><br>
        <input type="text" class="w3-input" name="altura"/><br>
        <?php
        if (isset($_POST['submitbtn']) && empty($_POST['altura']) ) {
            echo "<span style='color:red'>Campo de altura esta vacio.</span>";
        }
        ?><br><br>
        <input type="submit" class="w3-button w3-white w3-border w3-border-blue" name="submitbtn" value="Enviar datos"/>
    </form>
     </div>
    <?php
    
 }
    ?>
    <body>
    </body>
</html>








