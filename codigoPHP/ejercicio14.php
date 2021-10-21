
<?php
/*
 * Autor: Outmane Bouhou
 * Fecha: 19/10/2021
 * Ejercicio:14.Comprobar las librerías que estás utilizando en tu entorno de desarrollo y explotación. Crear tu propia librería de funciones y estudiar la forma de usarla en el entorno de desarrollo y en el de explotación
 */
require_once '../core/libreriaCalcular.php';              
echo "<h3>Usar la librería que he creado con operaciones :</h3>";
//Uso de librerías para realizar operaciones 
echo "<p>La división de dos numeros : 9 y 3  = " . dividir(9, 3) . "</p>";
echo "<p>La suma de dos numeros : 10 y 15 = " . sumar(10, 15) . "</p>";
echo "<p>La resta de dos numeros : 10 y 15 = " . restar(10, 15) . "</p>";
echo "<p>La multiplicacion de dos numeros : 10 y 15 = " . multiplicar(10, 15) . "</p>";

?>


