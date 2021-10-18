
<?php
/*
 * Autor: Outmane Bouhou
 * Fecha: 15/10/2021
 * Ejercicio:2. Inicializar y mostrar una variable heredoc.
 */
$sql = <<<OB
SELECT nombre, apellido1, departamento
FROM personas
FULL JOIN departamentos
WHERE personas.dep = departamentos.dep 
OB;
echo $sql;
?>


