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
        <title>OUTMANE BOUHOU:Ejercicio22</title>
        <link rel="icon" href="../webroot/media/img/fav.png" type="image/ico" sizes="16x16">


    </head>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
        <label>Cual es tu nombre :</label><br>
        <input type="text" name="nombre"/><br>
        <?php
        if (isset($_POST['submitbtn']) && empty($_POST['nombre'])) {
            echo "<span style='color:red'>El campo nombre esta vacio.</span>";
        }
        ?><br><br>

        <label>Cual es tu altura :</label><br>
        <input type="text" name="altura"/><br>
        <?php
        if (isset($_POST['submitbtn']) && empty($_POST['altura'])) {
            echo "<span style='color:red'> El campo altura esta vacio. </span>";
        }
        ?><br><br>
        <input type="submit" name="submitbtn" value="Enviar datos"/>
    </form>
    <?php
    echo '<br><br>';
    if (isset($_POST['submitbtn']) && !empty($_POST['nombre']) && !empty($_POST['altura'])) {
        $nombre = $_POST['nombre'];
        $altura = $_POST['altura'];
        echo 'El nombre introducido  <strong> ' . $nombre . '</strong><br>';
        echo 'Y la altura es :  <strong> ' . $altura . '</strong> <br><br>';
        echo 'El contenido de $_REQUEST : <pre>';
        print_r($_REQUEST);
        echo '</pre>';
    }
    ?>
    <body>
    </body>
</html>








