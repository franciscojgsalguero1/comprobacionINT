<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Comprobacion INT</title>
    </head>
    <body>
        <?php
        // put your code here
        $numero = PHP_INT_MAX;
        echo "El mayor entero es: " . $numero;
        var_dump(is_int($numero));
        // comprobamos que pasa si ponemos un número mayor que el mayor
        //echo "El mayor entero es: " . $numero+1;
        ?>
    </body>
</html>