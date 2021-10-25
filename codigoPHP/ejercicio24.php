<?php
/*
 * Autor: Outmane Bouhou
 * Fecha: 21/10/2021
 * Ejercicio:24. Construir un formulario para recoger un cuestionario realizado a una persona y mostrar en la  misma página las preguntas y las respuestas
recogidas; en el caso de que alguna respuesta esté vacía o errónea volverá a salir el formulario con el mensaje correspondiente, pero las
respuestas que habíamos tecleado correctamente aparecerán en el formulario y no tendremos que volver a teclearlas.
 */
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>OUTMANE BOUHOU:Ejercicio24</title>
        <link rel="stylesheet" type="text/css" href="../webroot/css/form.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="icon" href="../webroot/media/img/fav.png" type="image/ico" sizes="16x16">
        <style>
            span{
                color:red;
            }
        </style>
    </head>
    <?php
    
    //Array de errores inicializado a null
    $aErrores = ["nombre" => null, "altura" => null];
    //Inicialización de la variable que nos indica que todo va bien
    $entradaOK = true;
    //Para cada campo del formulario: Validar entrada y actuar en consecuencia
    if (isset($_POST['submitbtn'])) {

        $nombre = $_POST['nombre'];
        $altura = $_POST['altura'];
        //Validar entrada
        if (empty($nombre)) {
            //Construir mensajes de error
            
            $aErrores["nombre"] = "(*)";
            $entradaOK = false;
        } else {
            $nombre;
        }
        if (empty($altura) || $altura < 100) {
            //Construir mensajes de error
            $aErrores["altura"] = " (*) no esta correcto";
            $entradaOK = false;
        } else {
            $altura;
        }
    } else {
        //El formulario no se ha rellenado nunca
        $entradaOK = false;
    }
    if ($entradaOK) {
        //Tratamiento del formulario - Tratamiento de datos OK
        $nombre = $_POST['nombre'];
        $altura = $_POST['altura'];
        echo 'El nombre introducido  <strong> ' . $nombre . '</strong><br>';
        echo 'Y la altura es :  <strong> ' . $altura . '</strong> <br><br>';
    } else {
        ?>
        <!--Mostrar el formulario hasta que lo rellenemos correctamente-->
        <!--Mostrar formulario-->
        <div class="w3-container">
            <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
                <label>Cual es tu nombre :</label><br>
                <input type="text" class="w3-input" name="nombre" value="<?php
                //Mostrar los tatos tecleados correctamente en intentos anteriores
                if (isset($_REQUEST['nombre']) && $aErrores["nombre"] == null) {
                    echo $_REQUEST['nombre'];
                }
                ?>"/> <?php
                       //Mostrar mensajes de error 
                       if (isset($aErrores["nombre"])) {
                           echo "<span>" . $aErrores["nombre"] . "</span>";
                       }
                       ?><br>
                <label>Cual es tu altura :</label><br>
                <input type="text" class="w3-input" name="altura" value="<?php
                if (isset($_REQUEST['altura']) && $aErrores["altura"] == null) {
                    echo $_REQUEST['altura'];
                }
                ?>"/><?php
                       if (isset($aErrores["altura"])) {
                           echo "<span>" . $aErrores["altura"] . "</span>";
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








