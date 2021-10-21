
<?php

/*
 * Autor: Outmane Bouhou
 * Fecha: 19/10/2021
 * Ejercicio: 12. Mostrar el contenido de las variables superglobales (utilizando print_r() y foreach())
 */

/* Mostrar el contenido de las variables superglobales (utilizando print_r() y foreach()). */

// El contenido de $_SERVER
echo '<h3>Mostrar el contenido de $_SERVER :</h3>  ';
echo '<h4>Con foreach :</4>  ';
echo '<table><tr><th>Clave</th><th>Valor</th></th>';
foreach ($_SERVER as $Clave => $Valor) {
    echo '<tr>';
    echo "<td>$Clave</td>";
    echo "<td>$Valor</td>";
    echo '</tr>';
}
echo '</table>';

echo '<h4>Con print_r :</h4>  ';
echo '<pre>';
print_r($_SERVER);
echo '</pre>';
// El contenido de $GLOBALS
echo '<h3>Mostrar el contenido de $GLOBALS :</h3>  ';
echo '<h4>Con foreach :</4>  ';
echo '<table><tr><th>Clave</th></th>';
foreach ($GLOBALS as $Clave => $Valor) {
    echo '<tr>';
    echo "<td>$Clave</td>";
  
    echo '</tr>';
}
echo '</table>';

echo '<h4>Con print_r :</h4>  ';
echo '<pre>';
print_r($GLOBALS);
echo '</pre>';
// El contenido de $_REQUEST
echo '<h3>Mostrar el contenido de $_REQUEST :</h3>  ';
echo '<h4>Con foreach :</4>  ';
echo '<table><tr><th>Clave</th><th>Valor</th></th>';
foreach ($_REQUEST as $Clave => $Valor) {
    echo '<tr>';
    echo "<td>$Clave</td>";
    echo "<td>$Valor</td>";
    echo '</tr>';
}
echo '</table>';

echo '<h4>Con print_r :</h4>  ';
echo '<pre>';
print_r($_REQUEST);
echo '</pre>';

// El contenido de $_FILES
echo '<h3>Mostrar el contenido de $_FILES :</h3>  ';
echo '<h4>Con foreach :</4>  ';
echo '<table><tr><th>Clave</th><th>Valor</th></th>';
foreach ($_FILES as $Clave => $Valor) {
    echo '<tr>';
    echo "<td>$Clave</td>";
    echo "<td>$Valor</td>";
    echo '</tr>';
}
echo '</table>';

echo '<h4>Con print_r :</h4>  ';
echo '<pre>';
print_r($_FILES);
echo '</pre>';


// El contenido de $_ENV
echo '<h3>Mostrar el contenido de $_ENV :</h3>  ';
echo '<h4>Con foreach :</4>  ';
echo '<table><tr><th>Clave</th><th>Valor</th></th>';
foreach ($_ENV as $Clave => $Valor) {
    echo '<tr>';
    echo "<td>$Clave</td>";
    echo "<td>$Valor</td>";
    echo '</tr>';
}
echo '</table>';


echo '<h4>Con print_r :</h4>  ';
echo '<pre>';
print_r($_ENV);
echo '</pre>';

// El contenido de $_SESSION
echo '<h3>Mostrar el contenido de $_SESSION :</h3>  ';
echo '<h4>Con foreach :</4>  ';
echo '<table><tr><th>Clave</th><th>Valor</th></th>';
foreach ($_SESSION as $Clave => $Valor) {
    echo '<tr>';
    echo "<td>$Clave</td>";
    echo "<td>$Valor</td>";
    echo '</tr>';
}
echo '</table>';


echo '<h4>Con print_r :</h4>  ';
echo '<pre>';
print_r($_SESSION);
echo '</pre>';

// El contenido de $_POST
echo '<h3>Mostrar el contenido de $_POST :</h3>  ';
echo '<h4>Con foreach :</4>  ';
echo '<table><tr><th>Clave</th><th>Valor</th></th>';
foreach ($_POST as $Clave => $Valor) {
    echo '<tr>';
    echo "<td>$Clave</td>";
    echo "<td>$Valor</td>";
    echo '</tr>';
}
echo '</table>';


echo '<h4>Con print_r :</h4>  ';
echo '<pre>';
print_r($_POST);
echo '</pre>';
// El contenido de $_GET
echo '<h3>Mostrar el contenido de $_GET :</h3>  ';
echo '<h4>Con foreach :</4>  ';
echo '<table><tr><th>Clave</th><th>Valor</th></th>';
foreach ($_GET as $Clave => $Valor) {
    echo '<tr>';
    echo "<td>$Clave</td>";
    echo "<td>$Valor</td>";
    echo '</tr>';
}
echo '</table>';


echo '<h4>Con print_r :</h4>  ';
echo '<pre>';
print_r($_GET);
echo '</pre>';

?>


