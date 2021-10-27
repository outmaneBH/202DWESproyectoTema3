<!DOCTYPE html>
<html lang="en">

    <head>
        <style>
            table{
                border-collapse: collapse;
                width: 100%;
                height: 300px;
                text-align: center
            }
            #td1{
                background-color: red;
            }
        </style>

    </head>
    <?php
    /*
     * Autor: Outmane Bouhou
     * Fecha: 26/10/2021
     * Ejercicio:17. Inicializar un array (bidimensional con dos índices numéricos) donde almacenamos el nombre de las personas que tienen reservado el
      asiento en un teatro de 20 filas y 15 asientos por fila. (Inicializamos el array ocupando únicamente 5 asientos). Recorrer el array con
      distintas técnicas (foreach(), while(), for()) para mostrar los asientos ocupados en cada fila y las personas que lo ocupan
     */
    /*     * inicializamos el array ocupando únicamente 5 asientos */

    /** Recorrer el array con distintas técnicas */
    for ($aFila = 1; $aFila <= 20; $aFila++) {
        for ($aAsiento = 1; $aAsiento <= 15; $aAsiento++) {
            $aTeatro[$aFila][$aAsiento] = null;
        }
    }
    /* Inicializamos el array ocupando únicamente 5 asientos */
    $aTeatro[4][7] = "Nombre1";
    $aTeatro[3][5] = "Nombre2";
    $aTeatro[3][9] = "Nombre3";
    $aTeatro[5][12] = "Nombre4";
    $aTeatro[8][14] = "Nombre5";

    //usar for
    echo '<h3>Reccorer el Array usando for()</h3>';
    echo '<table border="2px">';
    for ($aFilas = 1; $aFilas <= 20; $aFilas++) {
        echo '<tr>';
        for ($aAsientos = 1; $aAsientos <= 15; $aAsientos++) {

            if ($aTeatro[$aFilas][$aAsientos] != null) {
                echo '<td id="td1">' . $aTeatro[$aFilas][$aAsientos] . '</td>';
            } else {
                echo '<td id="td2">Fila '.$aFilas.' asiento '.$aAsientos.' </td>';
            }
        }
        echo '</tr>';
    }
    echo '</table>';

    //usar foreach() {
    /* echo '<h3>Reccorer el Array usando foreach()</h3>';
      echo '<table border="2px">';
      foreach ($aTeatro as $key => $value) {
      echo '<tr>';
      foreach ($aTeatro as $key2 => $value2) {
      if ($aTeatro[$key][$key2] != null) {
      echo '<td id="td1">' . $aTeatro[$key][$key2] . '</td>';
      } else {
      echo '<td id="td2">vacio</td>';
      }
      }
      echo '</tr>';
      }
      echo '</table>'; */
    //usar foreach() {
    echo '<h3>Reccorer el Array usando while()</h3>';
    echo '<table border="2px">';
    $filas = 1;
    while ($filas <= 20) {
        $asientos = 1;
        while ($asientos <= 15) {
            if ($aTeatro[$filas][$asientos] != null) {
                echo '<td id="td1">' . $aTeatro[$filas][$asientos] . '</td>';
            } else {
               echo '<td id="td2">Fila '.$aFilas.' asiento '.$aAsientos.' </td>';
            }
            $asientos++;
        }
         echo '</tr>';
        $filas++;
    }
    ?>


