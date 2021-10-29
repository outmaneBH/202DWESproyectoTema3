<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <style>
            label{
                padding-right: 50px;

            }
            input{
                margin: 5px;

            }
            span{
                color: red;
            }
            div>span{
                padding: 10px;
                color: blue;
                font-weight: bold;
                font-family: cursive;
                font-size: 18px;
            }


        </style>
    </head>
    <?php
//usar la libreria de validacion
    require_once '../core/210322ValidacionFormularios.php';

//definir un variable constante obligatorio a 1
    define("OBLIGATORIO", 1);
    define("OPCIONAL", 0);
    define("FECHAMAXIMA", "01/01/2080");
    define("FECHAMINIMA", "01/01/1940");


//Varible de entrada correcta inicializada a true
    $entradaOK = true;

//definir un array para alamcenar errores del nombre y la altura
    $aErrores = ["alfabetico" => null,
        "opalfabetico" => null,
        "entero" => null,
        "opentero" => null,
        "float" => null,
        "opfloat" => null,
        "date" => null,
        "opdate" => null,
        "email" => null,
        "opemail" => null,
        "gender" => null,
        "opgender" => null
    ];

//Array de respuestas inicializado a null
    $aRespuestas = ["alfabetico" => null,
        "opalfabetico" => null,
        "entero" => null,
        "opentero" => null,
        "float" => null,
        "opfloat" => null,
        "date" => null,
        "opdate" => null,
        "email" => null,
        "opemail" => null,
        "gender" => null,
        "opgender" => null
    ];

//comprobar si ha pulsado el button enviar 
    if (isset($_REQUEST['submitbtn'])) {
        //Para cada campo del formulario: Validar entrada y actuar en consecuencia
        //Validar entrada
        //Comprobar si el campo alfabetico esta rellenado
        $aErrores["alfabetico"] = validacionFormularios::comprobarAlfabetico($_REQUEST['alfabetico'], 200, 1, OBLIGATORIO);
        $aErrores["opalfabetico"] = validacionFormularios::comprobarAlfabetico($_REQUEST['opalfabetico'], 200, 1, OPCIONAL);

        //Comprobar si el campo entero  esta rellenado 
        $aErrores["entero"] = validacionFormularios::comprobarEntero($_REQUEST['entero'], 200, 1, OBLIGATORIO);
        $aErrores["opentero"] = validacionFormularios::comprobarEntero($_REQUEST['opentero'], 200, 1, OPCIONAL);

        //Comprobar si el campo float  esta rellenado 
        $aErrores["float"] = validacionFormularios::comprobarFloat($_REQUEST['float'], 5000, 1, OBLIGATORIO);
        $aErrores["opfloat"] = validacionFormularios::comprobarFloat($_REQUEST['opfloat'], 5000, 1, OPCIONAL);

        //Comprobar si el campo date  esta rellenado
        $aErrores["date"] = validacionFormularios::validarFecha($_REQUEST['date'], FECHAMAXIMA, FECHAMINIMA, OBLIGATORIO);
        $aErrores["opdate"] = validacionFormularios::validarFecha($_REQUEST['opdate'], FECHAMAXIMA, FECHAMINIMA, OPCIONAL);

        //Comprobar si el campo email esta rellenado
        $aErrores["email"] = validacionFormularios::validarEmail($_REQUEST['email'], OBLIGATORIO);
        $aErrores["opemail"] = validacionFormularios::validarEmail($_REQUEST['opemail'], OPCIONAL);

        //Comprobar si el campo radio esta checked
        if(isset($_REQUEST['gender']))
        {
            $gender=$_REQUEST['gender'];
            $aErrores["gender"] = validacionFormularios::comprobarAlfabetico($gender,200,1, OBLIGATORIO);
            
        }
            
        
        
         /*  $aErrores["opgender"] = validacionFormularios::comprobarAlfabetico($_REQUEST['opgender'], OPCIONAL); */




//recorrer el array de errores
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

        $aRespuestas = [
            "alfabetico" => $_REQUEST['alfabetico'],
            "opalfabetico" => $_REQUEST['opalfabetico'],
            "entero" => $_REQUEST['entero'],
            "opentero" => $_REQUEST['opentero'],
            "float" => $_REQUEST['float'],
            "opfloat" => $_REQUEST['opfloat'],
            "date" => $_REQUEST['date'],
            "opdate" => $_REQUEST['opdate'],
            "email" => $_REQUEST['email'],
            "opemail" => $_REQUEST['opemail'],
            "gender" => $_REQUEST['gender'],
            "opgender" => $_REQUEST['opgender']
        ];


        //Mostrar los datos correctos obligatorios
        echo "<div> <h3>los datos que has introducido :</h3> <span> Alfabetico  : </span><strong> " . $aRespuestas['alfabetico'] . "</strong><br>";
        echo "<span>Entero   :</span><strong> " . $aRespuestas['entero'] . "</strong><br>";
        echo "<span>Float   : </span><strong> " . $aRespuestas['float'] . "</strong><br>";
        echo "<span>Fecha   :</span><strong>  " . $aRespuestas['date'] . "</strong><br>";
        echo "<span>Email   :</span> <strong> " . $aRespuestas['email'] . "</strong><br>";
        echo "<span>Sexo   :</span> <strong> " . $aRespuestas['gender'] . "</strong><br>";

        //Mostrar los datos correctos opcionales
        echo "<div> <h3>los datos que has introducido :</h3> <span> Alfabetico  : </span><strong> " . $aRespuestas['opalfabetico'] . "</strong><br>";
        echo "<span>Entero   :</span><strong> " . $aRespuestas['opentero'] . "</strong><br>";
        echo "<span>Float   : </span><strong> " . $aRespuestas['opfloat'] . "</strong><br>";
        echo "<span>Fecha   :</span><strong>  " . $aRespuestas['opdate'] . "</strong><br>";
        echo "<span>Email   :</span> <strong> " . $aRespuestas['opemail'] . "</strong><br>";
        echo "<span>Sexo   :</span> <strong> " . $aRespuestas['opgender'] . "</strong><br>";
    } else {
        //Mostrar el formulario hasta que lo rellenemos correctamente
        //Mostrar formulario
        ?>
        <div >
            <fieldset>
                <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">

                    <!--El campo alfabetico obligatorio -->
                    <label>Campo alfabetico (*)   :</label>
                    <input type="text" name="alfabetico" value="<?php echo (isset($_REQUEST['alfabetico']) ? $_REQUEST['alfabetico'] : null); ?>"/>
                    <span><?php echo ($aErrores["alfabetico"] != null ? $aErrores['alfabetico'] : null); ?></span><br>
                    <!--El campo alfabetico opcional -->
                    <label>Campo alfabetico :</label> 
                    <input type="text"  name="opalfabetico" value="<?php echo (isset($_REQUEST['opalfabetico']) ? $_REQUEST['opalfabetico'] : null); ?>"/>
                    <span><?php echo ($aErrores["opalfabetico"] != null ? $aErrores['opalfabetico'] : null); ?></span><br>


                    <!--El campo entero obligatorio -->
                    <label>Campo entero (*)   :</label>
                    <input type="text"  name="entero" value="<?php echo (isset($_REQUEST['entero']) ? $_REQUEST['entero'] : null); ?>"/>
                    <span><?php echo ($aErrores["entero"] != null ? $aErrores['entero'] : null); ?></span><br>
                    <!--El campo entero opcional -->
                    <label>Campo entero     :</label>
                    <input type="text"  name="opentero" value="<?php echo (isset($_REQUEST['opentero']) ? $_REQUEST['opentero'] : null); ?>"/>
                    <span><?php echo ($aErrores["opentero"] != null ? $aErrores['opentero'] : null); ?></span><br>


                    <!--El campo float -->
                    <label>Campo float (*) :</label>
                    <input type="text"  name="float" value="<?php echo (isset($_REQUEST['float']) ? $_REQUEST['float'] : null); ?>"/>
                    <span><?php echo ($aErrores["float"] != null ? $aErrores['float'] : null); ?></span><br>
                    <!--El campo float opcional -->
                    <label>Campo float  :</label>
                    <input type="text"  name="opfloat" value="<?php echo (isset($_REQUEST['opfloat']) ? $_REQUEST['opfloat'] : null); ?>"/>
                    <span><?php echo ($aErrores["opfloat"] != null ? $aErrores['opfloat'] : null); ?> </span><br> 



                    <!--El campo date -->
                    <label>Campo date (*) :</label>
                    <input type="text"  name="date" value="<?php echo (isset($_REQUEST['date']) ? $_REQUEST['date'] : null); ?>"/>
                    <span><?php echo ($aErrores["date"] != null ? $aErrores['date'] : null); ?></span><br>
                    <!--El campo date opcional -->
                    <label>Campo date :</label>
                    <input type="text"  name="opdate" value="<?php echo (isset($_REQUEST['opdate']) ? $_REQUEST['opdate'] : null); ?>"/>
                    <span><?php echo ($aErrores["opdate"] != null ? $aErrores['opdate'] : null); ?></span><br>


                    <!--El campo email -->
                    <label>Campo email (*) :</label>
                    <input type="email"  name="email" value="<?php echo (isset($_REQUEST['email']) ? $_REQUEST['email'] : null); ?>"/>
                    <span><?php echo ($aErrores["email"] != null ? $aErrores['email'] : null); ?></span><br>
                    <!--El campo email opcional -->
                    <label>Campo email :</label>
                    <input type="email"  name="opemail" value="<?php echo (isset($_REQUEST['opemail']) ? $_REQUEST['opemail'] : null); ?>"/>
                    <span><?php echo ($aErrores["opemail"] != null ? $aErrores['opemail'] : null); ?></span><br>

                    <!--El campo radio-->
                    <label>Campo radio (*) :</label>
                    <input type="radio"  name="gender"  <?php if (isset($_REQUEST['gender']) && $_REQUEST['gender'] == "hombre") echo "checked"; ?> value="hombre" >Hombre
                    <input type="radio"  name="gender"  <?php if (isset($_REQUEST['gender']) && $_REQUEST['gender'] == "mujer") echo "checked"; ?> value="mujer" >Mujer
                    <span><?php echo ($aErrores["gender"] != null ? $aErrores['gender'] : null); ?></span><br>
                    <br>
                    <!--El campo radio opcional -->
                    <label>Campo radio :</label>
                     <input type="radio"  name="opgender"  <?php if (isset($_REQUEST['opgender']) && $_REQUEST['opgender'] == "hombre") echo "checked"; ?> value="hombre" >Hombre
                     <input type="radio"  name="opgender"  <?php if (isset($_REQUEST['opgender']) && $_REQUEST['opgender'] == "mujer") echo "checked"; ?> value="mujer" >Mujer
                     <br>
                    <input type="submit" class="w3-btn w3-teal" name="submitbtn" value="Enviar datos"/>
                </form>
            </fieldset>
        </div>
        <?php
    }
    ?>
    <body>
    </body>
</html>








