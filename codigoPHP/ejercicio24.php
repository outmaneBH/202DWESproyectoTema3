<?php
/*
 * Autor: Outmane Bouhou
 * Fecha: 25/10/2021
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
            div{
                background: white;
            }
            body{
                background-image: url(../webroot/media/sunset.jpg);
                background-repeat: no-repeat;
                background-size: cover;
            }
            form span{
                color:red;
                font-size: 15px;
                font-weight: bold;

            }
            div{
                padding: 20px;
            }
            div>span{
                color: blue;
                font-weight: bold;
                font-family: cursive;
                font-size: 18px;
            }
            h3{
                text-decoration: underline red;

            }

        </style>
    </head>
    <body>


        <?php
        /* usar la libreria de validacion */
        require_once '../core/210322ValidacionFormularios.php';

        /* definir un variable constante obligatorio a 1 y opcionales a 0 */
        define("OBLIGATORIO", 1);
        define("OPCIONAL", 0);
        define("FECHAMAXIMA", "01/01/2080");
        define("FECHAMINIMA", "01/01/1940");


        /* Varible de entrada correcta inicializada a true */
        $entradaOK = true;

        /* definir un array para alamcenar errores del nombre y la altura */
        $aErrores = ["name" => null,
            "surname" => null,
            "age" => null,
            "date_of_birth" => null,
            "address" => null,
            "phone" => null,
            "height" => null,
            "salary" => null
        ];

        /* Array de respuestas inicializado a null */
        $aRespuestas = ["name" => null,
            "surname" => null,
            "age" => null,
            "date_of_birth" => null,
            "address" => null,
            "phone" => null,
            "height" => null,
            "salary" => null
        ];

        /* comprobar si ha pulsado el button enviar */
        if (isset($_REQUEST['submitbtn'])) {
            //Para cada campo del formulario: Validar entrada y actuar en consecuencia
            //Validar entrada
            //Comprobar si el campo name esta rellenado
            $aErrores["name"] = validacionFormularios::comprobarAlfabetico($_REQUEST['name'], 200, 1, OBLIGATORIO);

            //Comprobar si el campo surname  esta rellenado 
            $aErrores["surname"] = validacionFormularios::comprobarAlfabetico($_REQUEST['surname'], 200, 1, OBLIGATORIO);

            //Comprobar si el campo age esta rellenado
            $aErrores["age"] = validacionFormularios::comprobarEntero($_REQUEST['age'], 150, 1, OBLIGATORIO);

            //Comprobar si el campo date_of_birth  esta rellenado
            $aErrores["date_of_birth"] = validacionFormularios::validarFecha($_REQUEST['date_of_birth'], FECHAMAXIMA, FECHAMINIMA, OBLIGATORIO);

            //Comprobar si el campo address esta rellenado
            $aErrores["address"] = validacionFormularios::comprobarAlfaNumerico($_REQUEST['address'], 2000, 1, OBLIGATORIO);

            //Comprobar si el campo phone  esta rellenado
            $aErrores["phone"] = validacionFormularios::validarTelefono($_REQUEST['phone'], OBLIGATORIO);

            //Comprobar si el campo height  esta rellenado */
            $aErrores["height"] = validacionFormularios::comprobarEntero($_REQUEST['height'], 250, 1, OBLIGATORIO);

            //Comprobar si el campo salary  esta rellenado */
            $aErrores["salary"] = validacionFormularios::comprobarFloat($_REQUEST['salary'], 5000, 20, OBLIGATORIO);

            /* recorrer el array de errores */
            foreach ($aErrores as $nombreCampo => $value) {
                //Comprobar si el campo ha sido rellenado
                if ($value != null) {
                    $_REQUEST[$nombreCampo] = "";
                    // cuando encontremos un error
                    $entradaOK = false;
                }
            }
        } else {
            //El formulario no se ha rellenado nunca
            $entradaOK = false;
        }
        if ($entradaOK) {
            //Tratamiento del formulario - Tratamiento de datos OK
            //Si los datos estan correctos

            $aRespuestas = ["name" => $_REQUEST['name'],
                "surname" => $_REQUEST['surname'],
                "age" => $_REQUEST['age'],
                "date_of_birth" => $_REQUEST['date_of_birth'],
                "address" => $_REQUEST['address'],
                "phone" => $_REQUEST['phone'],
                "height" => $_REQUEST['height'],
                "salary" => $_REQUEST['salary'],
            ];


            //Mostrar los datos correctos
            echo "<div> <h3>Tus datos que has introducido :</h3> <span>Nombre   : </span><strong> " . $aRespuestas['name'] . "</strong><br>";
            echo "<span>Apellidos   :</span><strong> " . $aRespuestas['surname'] . "</strong><br>";
            echo "<span>Edad   : </span><strong> " . $aRespuestas['age'] . "</strong><br>";
            echo "<span>Fecha de nacimiento   :</span> <strong> " . $aRespuestas['date_of_birth'] . "</strong><br>";
            echo "<span>Direccion   :</span><strong>  " . $aRespuestas['address'] . "</strong><br>";
            echo "<span>Telefono   :</span> <strong> " . $aRespuestas['phone'] . "</strong><br>";
            echo "<span>Altura   :</span> <strong> " . $aRespuestas['height'] . "</strong><br>";
            echo "<span>Sueldo   :</span> <strong> " . $aRespuestas['salary'] . " €</strong><br></div>";
        } else {
            //Mostrar el formulario hasta que lo rellenemos correctamente
            //Mostrar formulario
            ?>

            <div class="w3-container">
               <h4>Formulario con Validacion de Campos: </h4>

                <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
                    <!--El campo name obligatorio -->
                    <label>Cual es tu nombre :</label><br>
                    <input type="text" class="w3-input" name="name" value="<?php echo (isset($_REQUEST['name']) ? $_REQUEST['name'] : null); ?>"/>
                    <span><?php echo ($aErrores["name"] != null ? $aErrores['name'] : null); ?></span><br>


                    <!--El campo surname  -->

                    <label>Cual es tu apellido :</label><br>
                    <input type="text" class="w3-input" name="surname" value="<?php echo (isset($_REQUEST['surname']) ? $_REQUEST['surname'] : null); ?>" /> 
                    <span><?php echo ($aErrores["surname"] != null ? $aErrores['surname'] : null) ?></span><br>


                    <!--El campo age -->  
                    <label>La edad :</label><br>
                    <input type="text" class="w3-input" name="age" value="<?php echo (isset($_REQUEST['age']) ? $_REQUEST['age'] : null); ?>" /> 
                    <span><?php echo ($aErrores["age"] != null ? $aErrores['age'] : null) ?></span><br>

                    <!--El campo date_of_birth -->  
                    <label>La fecha de nacimiento :</label><br>
                    <input type="text" class="w3-input" placeholder="dd/mm/yyyy" name="date_of_birth"  value="<?php echo (isset($_REQUEST['date_of_birth']) ? $_REQUEST['date_of_birth'] : null); ?>" /> 
                    <span><?php echo ($aErrores["date_of_birth"] != null ? $aErrores['date_of_birth'] : null); ?></span><br>


                    <!--El campo address -->  
                    <label>La direccion :</label><br>
                    <input type="text" class="w3-input" name="address"  value="<?php echo (isset($_REQUEST['address']) ? $_REQUEST['address'] : null) ?>" /> 
                    <span><?php echo ($aErrores["address"] != null ? $aErrores['address'] : null) ?></span><br>

                    <!--El campo phone -->  
                    <label>El telefono :</label><br>
                    <input type="text" class="w3-input" name="phone"  value="<?php echo (isset($_REQUEST['phone']) ? $_REQUEST['phone'] : null); ?>" /> 
                    <span><?php echo ($aErrores["phone"] != null ? $aErrores['phone'] : null); ?></span><br>

                    <!--El campo height -->  
                    <label>Cual es tu altura en (cm) :</label><br>
                    <input type="text" class="w3-input" name="height" value="<?php echo (isset($_REQUEST['height']) ? $_REQUEST['height'] : null); ?>" /> 
                    <span><?php echo ($aErrores["height"] != null ? $aErrores['height'] : null); ?></span><br>

                    <!--El campo salary -->  
                    <label>Cual es tu sueldo en € :</label><br>
                    <input type="text" class="w3-input" name="salary" value="<?php echo (isset($_REQUEST['salary']) ? $_REQUEST['salary'] : null); ?>" /> 
                    <span><?php echo ($aErrores["salary"] != null ? $aErrores['salary'] : null); ?></span><br>

                    <input type="submit" class="w3-button w3-white w3-border w3-border-blue" name="submitbtn" value="Enviar datos"/>
                </form>

            </div>
            <?php
        }
        ?>
    </body>
</html> 








