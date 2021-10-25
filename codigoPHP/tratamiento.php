<?php
if(isset($_POST['submitbtn']))
{
    $nombre=$_POST['nombre'];
    $altura=$_POST['altura'];
    echo $err;
    echo 'El nombre introducido  <strong> '.$nombre.'</strong><br>';
    echo 'Y la altura es :  <strong> '.$altura.'</strong> <br><br>';
    
    echo 'El contenido de $_REQUEST : <pre>';
    print_r($_REQUEST);
     echo '</pre>';
     
     echo 'El contenido de $_POST : <pre>';
    print_r($_POST);
     echo '</pre>';
    
}
