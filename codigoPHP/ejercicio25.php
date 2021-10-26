<?php
/*
 * Autor: Outmane Bouhou
 * Fecha: 26/10/2021
 * Ejercicio:25. Trabajar en PlantillaFormulario.php mi plantilla para hacer formularios como churros.
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
                font-weight: bold;
            }
        </style>
    </head>
    <body>

    </body>
</html>
<?php
require_once '../core/210322ValidacionFormularios.php';
define("OBLIGATORIO", 1);
$aErrores = ["name" => null,
    "surname" => null,
    "age" => null,
    "date_of_birth" => null,
    "address" => null,
    "phone" => null,
    "height" => null];

//Varible de entrada correcta inicializada a true
$entradaOK = true;
//Array de respuestas inicializado a null
$avalidos = ["name" => null,
    "surname" => null,
    "age" => null,
    "date_of_birth" => null,
    "address" => null,
    "phone" => null,
    "height" => null];
//comprobar si ha pulsado el button enviar 
if (isset($_REQUEST['submitbtn'])) {
    //Comprobar si el campo nombre esta rellenado  y la altura
    $aErrores["name"] = validacionFormularios::comprobarAlfabetico($_REQUEST['name'], 200, 1, OBLIGATORIO);
  /*  $aErrores["surname"] = validacionFormularios::comprobarEntero($_REQUEST['surname'], 200, 1, OBLIGATORIO);
    $aErrores["age"] = validacionFormularios::comprobarEntero($_REQUEST['age'], 200, 1, OBLIGATORIO);
    $aErrores["date_of_birth"] = validacionFormularios::comprobarEntero($_REQUEST['date_of_birth'], 200, 1, OBLIGATORIO);
    $aErrores["phone"] = validacionFormularios::comprobarEntero($_REQUEST['phone'], 200, 1, OBLIGATORIO);*/
    $aErrores["height"] = validacionFormularios::comprobarEntero($_REQUEST['height'], 200, 1, OBLIGATORIO);
//recorrer el array de errores
    foreach ($aErrores as $key => $value) {
        //Comprobar si el campo ha sido rellenado
        if ($value != null) {
            $_REQUEST[$key] = "";
            $entradaOK = false;
        }
    }
} else {
    $entradaOK = false;
}
if ($entradaOK) {
    //Si los datos han sido introducidos correctamente
    $avalidos = ["nombre" => $_REQUEST['nombre'],
        "altura" => $_REQUEST['altura']];
    //Mostrar datos
    echo "Nombre: " . $avalidos['nombre'] . "<br>";
    echo "Su altura es : " . $avalidos['altura'] . "<br>";
} else {
    ?>
    <div class="w3-container">
        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
            <label>Cual es tu nombre :</label><br>
            <input type="text" class="w3-input" name="nombre" value="<?php
            if (isset($_REQUEST['nombre'])) {
                echo $_REQUEST['nombre'];
            }
            ?>"/> <span><?php
                       //mostrar el error del nombre
                       //con una if imediato
                       if ($aErrores["nombre"] != null) {
                           echo $aErrores['nombre'];
                       }
                       ?></span><br>
            <label>Cual es tu altura en (cm) :</label><br>
            <input type="text" class="w3-input" name="altura" value="<?php
            if (isset($_REQUEST['altura'])) {
                echo $_REQUEST['altura'];
            }
            ?>"/><span><?php
                       //mostrar el error del altura
                       if ($aErrores["altura"] != null) {
                           echo $aErrores['altura'];
                       }
                       ?></span><br><br>
            <input type="submit" class="w3-button w3-white w3-border w3-border-blue" name="submitbtn" value="Enviar datos"/>
        </form>
    </div>
    <?php
}
?>
<body>
</body>
</html> 








