<?php 
 
/*
 * Autor: Outmane Bouhou
 * Fecha: 15/10/2021
 * Ejercicio: 5. Inicializar y mostrar una variable que tiene una marca de tiempo (timestamp
  */

$fecha = new DateTime();
echo $fecha->format('U = Y-m-d H:i:s') . "\n";

$fecha->setTimestamp(1171502725);
echo $fecha->format('U = Y-m-d H:i:s') . "\n";

?>

