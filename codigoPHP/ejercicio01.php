<!DOCTYPE html>
<html lang="en">
    <head>
        <style>
            span{
                color: red;
            }
        </style>
    </head>
    <body>
        <?php
        /*
         * Autor: Outmane Bouhou
         * Fecha: 15/10/2021
         * Ejercicio:1. Inicializar variables de los distintos tipos de datos básicos(string, int, float, bool) y mostrar los datos por pantalla (echo, print, printf, print_r,
          var_dump)
         */
        $string = "TEXTO DE STRING";
        $int = 10;
        $float = 10.9;
        $bool = true;

        echo '<h3>Usando echo</h3> ';
        echo 'La variable $string tiene el valor <span>' . $string . ' </span> y es de tipo : ' . gettype($string) . '<br>';
        echo 'La variable $int tiene el valor <span>' . $int . ' </span> y es de tipo : ' . gettype($int) . '<br>';
        echo 'La variable $float tiene el valor <span>' . $float . '</span> y es de tipo : ' . gettype($float) . '<br>';
        echo 'La variable $bool tiene el valor <span>' . $bool . '</span> y es de tipo : ' . gettype($bool) . '<br>';
        print '<h3>Usando print</h3> ';
        print 'La variable $string tiene el valor : ' . $string . '<br>';
        print 'La variable $int tiene el valor : ' . $int . '<br>';
        print 'La variable $float tiene el valor : ' . $float . '<br>';
        print 'La variable $bool tiene el valor : ' . $bool . '<br>';
        printf('<h3>Usando printf()</h3> ');
        printf('La variable $string tiene el valor : ' . $string . '<br>');
        printf('La variable $int tiene el valor : ' . $int . '<br>');
        printf('La variable $float tiene el valor : ' . $float . '<br>');
        printf('La variable $bool tiene el valor : ' . $bool . '<br>');

        echo"<h3>Usando var_dump()</h3>";
        echo 'La variable $string :';
        var_dump($string);
        echo '<br>';
        echo 'La variable $int :';
        var_dump($int);
        echo '<br>';
        echo 'La variable $float :';
        var_dump($float);
        echo '<br>';
        echo 'La variable $bool :';
        var_dump($bool);

        $string = "TEXTO DE STRING";
        $int = 10;
        $float = 10.9;
        $bool = true;



        print_r('<h3>Usando print_r()</h3> ');
        print_r('$string  : ' . $string . '<br>');
        print_r('$int :' . $int . '<br>');
        print_r('$float : ' . $float . '<br>');
        print_r('$bool :' . $bool . '<br>');
        ?> 
    </body>
</html>



