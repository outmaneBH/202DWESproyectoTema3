<!DOCTYPE html>
<html lang="en">

    <head>
        <style>
            
            table{
               border-collapse: collapse; 
               width: 30%;
               text-align: center;
              
            }
            span{
                color: blue;
                font-weight: bold;
            }
        </style>
       
    </head>
<?php

/*
 * Autor: Outmane Bouhou
 * Fecha: 21/10/2021
 * Ejercicio:15. Crear e inicializar un array con el sueldo percibido de lunes a domingo. Recorrer el array para calcular el sueldo percibido durante la
  semana. (Array asociativo con los nombres de los días de la semana).
 */
/* Crear e inicializar un array*/
$diasDeSemana = ["Lunes" => 10, "Martes" => 20, "Miércoles" => 35, "Jueves" => 48, "Viernes" => 15, "Sabado" => 30, "Domingo" => 40];

/* Recorrer el array de dias de semana */
$sueldoPercibido = 0;

echo" <table border='2px'><tr><td>Dia </td><td>Sueldo</td><tr>";
foreach ($diasDeSemana as $dias => $sueldodia) {
    echo"<tr><td>" . $dias . "</td><td>" . $sueldodia . "</td>";
    $sueldoPercibido += $sueldodia;
}
echo"<tr><td colspan='2'><span>El sueldo total :" . $sueldoPercibido ."</span></td></tr></table>";

?>


