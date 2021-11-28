<?php
/*
 * Autor: Outmane Bouhou
 * Fecha: 21/10/2021
 * Ejercicio:22. Construir un formulario para recoger un cuestionario realizado a una persona y mostrar en la misma página las preguntas y las respuestas
  recogidas.
 */
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>OUTMANE BOUHOU:Ejercicio22</title>
        <link rel="stylesheet" type="text/css" href="../webroot/css/form.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="icon" href="../webroot/media/img/fav.png" type="image/ico" sizes="16x16">


    </head>
     <body>
    <?php
    if (isset($_POST['submitbtn'])) {
        $nombre = $_POST['nombre'];
        $altura = $_POST['altura'];
        echo 'El nombre introducido  <strong> ' . $nombre . '</strong><br>';
        echo 'Y la altura es :  <strong> ' . $altura . '</strong> <br><br>';

        echo 'El contenido de $_REQUEST : <pre>';
        print_r($_REQUEST);
        echo '</pre>';
        echo 'El contenido de $_POST : <pre>';
        print_r($_POST);
        echo '</pre>';
    } else {
        ?>
        <div class="w3-container">
            <h4>Formulario para recoger cuestionario </h4>
            <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
                <label>Cual es tu nombre :</label><br>
                <input type="text" class="w3-input" name="nombre"/><br><br>
                <label>Cual es tu altura :</label><br>
                <input type="text" class="w3-input" name="altura"/><br><br>

                <input type="submit" class="w3-button w3-white w3-border w3-border-blue" name="submitbtn" value="Enviar datos"/>
            </form>


        <?php } ?>
    </form>

   
    </body>
</html>








