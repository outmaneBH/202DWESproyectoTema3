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

    /** Recorrer el array con distintas técnicas for, while ,foreach
     *   Recorrer el array y inicializamoslo a null
     *  */
    for ($Fila = 1; $Fila <= 20; $Fila++) {
        for ($Asiento = 1; $Asiento <= 15; $Asiento++) {
            $aTeatro[$Fila][$Asiento] = null;
        }
    }
    /* Inicializamos el array ocupando únicamente 5 asientos */
    $aTeatro[4][7] = "Nombre1";
    $aTeatro[3][5] = "Nombre2";
    $aTeatro[3][9] = "Nombre3";
    $aTeatro[5][12] = "Nombre4";
    $aTeatro[8][14] = "Nombre5";

    //Reccorer el Array usando for() $fila recoree las filas y $Asiento los asientos
    echo '<h3>Reccorer el Array usando for()</h3>';
    echo '<table border="2px">';
    for ($fila = 1; $fila <= 20; $fila++) {
        echo '<tr>';
        for ($Asiento = 1; $Asiento <= 15; $Asiento++) {

            if ($aTeatro[$fila][$Asiento] != null) {
                echo '<td id="td1">' . $aTeatro[$fila][$Asiento] . '</td>';
            } else {
                echo '<td id="td2">Fila ' . $fila . ' asiento ' . $Asiento . ' </td>';
            }
        }
        echo '</tr>';
    }
    echo '</table>';

    //Reccorer el Array usando foreach()
    echo '<h3>Reccorer el Array usando foreach()</h3>';
    echo '<table border="2px">';
    foreach ($aTeatro as $fila => $aAsientos) {
        echo '<tr>';
        foreach ($aAsientos as $Asiento => $persona) {
            if ($persona != null) {
                echo '<td id="td1">' . $persona . '</td>';
            } else {
                echo '<td id="td2">vacio</td>';
            }
        }
        echo '</tr>';
    }
    echo '</table>';
    //Reccorer el Array usando while()
    /**
     *inicializamos las filas a 1 recorremos las filas tambien igual a los asientos y si 
     * en la fila concreta y asiento concreto es destinto de null mostramos los nombres que ocupan este asiento. */
    echo '<h3>Reccorer el Array usando while()</h3>';
    echo '<table border="2px">';
    $fila = 1;
    while ($fila <= 20) {
        $asiento = 1;
        while ($asiento <= 15) {
            if ($aTeatro[$fila][$asiento] != null) {
                echo '<td id="td1">' . $aTeatro[$fila][$asiento] . '</td>';
            } else {
                echo '<td id="td2">Fila ' . $fila . ' asiento ' . $asiento . ' </td>';
            }
            $asiento++;
        }
        echo '</tr>';
        $fila++;
    }
     echo '</table>';
    ?>


