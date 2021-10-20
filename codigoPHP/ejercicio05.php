<?php

/*
 * Autor: Outmane Bouhou
 * Fecha: 15/10/2021
 * Ejercicio: 5. Inicializar y mostrar una variable que tiene una marca de tiempo (timestamp)
 */

echo '<h2>timestamp() de hoy </h2>';
$ofecha = new DateTime();
echo $foecha->getTimestamp();

echo '<h2>Otro ejemplo </h2>';
$ofechaActual = new DateTime();
echo $ofechaActual->format('U = Y-m-d H:i:s') . "\n";
?>

