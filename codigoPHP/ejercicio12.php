
<?php

/*
 * Autor: Outmane Bouhou
 * Fecha: 19/10/2021
 * Ejercicio: 12. Mostrar el contenido de las variables superglobales (utilizando print_r() y foreach())
 */

/* Mostrar el contenido de las variables superglobales (utilizando print_r() y foreach()). */
echo "<h3>El contenido de \$_SERVER</h3>";
foreach ($_SERVER as $clave => $valor) {
    print_r($clave . ": " . $valor . "<br>");
}
echo "<h3>El contenido de \$_SERVER print_r</h3>";
print_r($_SERVER);


echo "<h3>El contenido de \$_REQUEST</h3>";
echo '<table><tr><th>Clave</th><th>Valor</th></th>';
foreach ($_REQUEST as $clave => $valor) {
    echo '<tr>';
    echo "<td>$clave</td>";
    echo "<td>$valor</td>";
    echo '</tr>';
}
echo '</table>';




/*
  echo "<h3>El contenido de \$_FILES</h3>";
  foreach ($_FILES as $clave => $valor){
  print_r($clave . ": " . $valor . "<br>");
  }

  echo "<h3>El contenido de \$_ENV</h3>";
  foreach ($_ENV as $clave => $valor){
  print_r($clave . ": " . $valor . "<br>");
  }

  echo "<h3>El contenido de \$_SESSION</h3>";
  foreach ($_SESSION as $clave => $valor){
  print_r($clave . ": " . $valor . "<br>");
  }
  echo '<h2> print_r de $_SESSION</h2>';



  echo "<h3>El contenido de \$_GET</h3>";
  foreach ($_GET as $valor){
  print_r( $valor . "<br>");
  }
  echo "<h3>El contenido de \$_POST</h3>";
  foreach ($_POST as $valor){
  print_r( $valor . "<br>");
  }

  echo "<h3>El contenido de \$_REQUEST</h3>";
  foreach ($_REQUEST as $clave=>$valor){
  print_r($clave . ": " . $valor . "<br>");
  }



  echo "<h3>El contenido de \$GLOBALS</h3>";
  foreach ($GLOBALS as $clave=>$valor){
  print_r($clave."<br>");
  print_r($valor);
  }
*/

?>


